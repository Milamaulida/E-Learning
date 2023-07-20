<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rectorate extends Model
{
    use HasFactory;
    protected $table = 'rectorate';

    protected $fillable = ['name','age','role'];

    protected $dates = ['created_at', 'updated_at'];
}
