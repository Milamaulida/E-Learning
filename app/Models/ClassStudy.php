<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassStudy extends Model
{
    use HasFactory;
    protected $table = 'class_study';

    protected $fillable = ['name_class','room'];

    protected $dates = ['created_at', 'updated_at'];
}
