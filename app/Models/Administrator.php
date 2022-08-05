<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Administrator extends Model
{
    use HasFactory;

    protected $table = 'administrators';

    protected $fillable = [
        'image',
        'username',
        'title',
        'content'
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/administrator/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );

            return '/upload/administrator/' . date('d-m-Y') . '/' .$request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $administrator): string
    {

        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $administrator->image)) {
                File::delete(public_path() . $administrator->image);
            }

            self::checkDirectory();

            $request->file('image')
               ->move(
                  public_path() . '/upload/administrator/' .date('d-m-Y'),
                  $request->file('image')->getClientOriginalName()
               );
            return '/upload/administrator/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $administrator->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/administrator/' .date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/administrator/' .date('d-m-Y'), $mode =  0777, true, true);
        }

        return true;
    }
}
