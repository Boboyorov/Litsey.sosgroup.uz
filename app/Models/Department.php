<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'title',
        'image',
        'text'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $image = $request->file('image');
            $file = Image::make($image);

            $file->save(public_path() . '/upload/department/' . date('d-m-Y') . '/' . $image->hashName());
            return '/upload/department/' . date('d-m-Y') . '/' . $image->hashName();
        }

        return null;
    }

    public static function updateImage($request, $department): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $department->image)) {
                File::delete(public_path() . $department->image);
            }

            self::checkDirectory();
            $image = $request->file('image');
            $file = Image::make($image);

            $file->save(public_path() . '/upload/department/' . date('d-m-Y') . '/' . $image->hashName());

            return '/upload/department/' . date('d-m-Y') . '/' . $image->hashName();
        }

        return $department->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/department/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/department/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }

  
}
