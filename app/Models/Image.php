<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['file_name', 'file_type', 'file_path', 'file_extension', 'category'];
}
