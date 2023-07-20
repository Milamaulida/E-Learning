<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = 'major';

    protected $fillable = ['name_major','head_of_program','code_major'];

    protected $dates = ['created_at', 'updated_at'];
}

