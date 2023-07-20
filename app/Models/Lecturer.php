<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $table = 'lecturer';

    protected $fillable = ['name','nidn','age','role','gender','religion','email','no_phone','address'];

    protected $dates = ['created_at', 'updated_at'];
}

