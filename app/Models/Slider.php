<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Slider extends Model
{
    use HasFactory;

    protected $translatable = ['title', 'description'];

    protected $fillable = [
        'title',
        'image',
        'description'
    ];

      public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $image = $request->file('image');
            $file = Image::make($image);

            $file->save(public_path() . '/upload/slider/' . date('d-m-Y') . '/' . $image->hashName());
            return '/upload/slider/' . date('d-m-Y') . '/' . $image->hashName();
        }

        return null;
    }

    public static function updateImage($request, $slider): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $slider->image)) {
                File::delete(public_path() . $slider->image);
            }

            self::checkDirectory();
            $image = $request->file('image');
            $file = Image::make($image);

            $file->save(public_path() . '/upload/slider/' . date('d-m-Y') . '/' . $image->hashName());

            return '/upload/slider/' . date('d-m-Y') . '/' . $image->hashName();
        }

        return $slider->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/slider/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/slider/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}
