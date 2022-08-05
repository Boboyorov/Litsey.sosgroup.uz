<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Varticle extends Model
{
    use HasFactory;

    protected $table = 'varticles';

    protected $fillable = [
        'image',
        'slug',
        'title',
        'content'
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/varticle/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );

            return '/upload/varticle/' . date('d-m-Y') . '/' .$request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $varticle): string
    {

        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $varticle->image)) {
                File::delete(public_path() . $varticle->image);
            }

            self::checkDirectory();

            $request->file('image')
               ->move(
                  public_path() . '/upload/varticle/' .date('d-m-Y'),
                  $request->file('image')->getClientOriginalName()
               );
            return '/upload/varticle/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $varticle->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/varticle/' .date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/varticle/' .date('d-m-Y'), $mode =  0777, true, true);
        }

        return true;
    }
}
