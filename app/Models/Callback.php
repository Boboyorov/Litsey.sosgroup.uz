<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Callback extends Model
{
    use HasFactory;

    protected $table = 'callbacks';

    protected $fillable = [
        'adress',
        'moljal',
        'bekat',
        'email',
        'phone',
        'frame'
    ];
}
