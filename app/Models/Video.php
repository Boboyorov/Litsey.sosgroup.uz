<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    protected $fillable = [
        'content',
        'frame',
    ];
}
