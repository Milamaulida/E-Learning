<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $table = 'mark';

    protected $fillable = ['name_class','code_class','name_student','name_subject','code_subject','sks','mark','grade'];

    protected $dates = ['created_at', 'updated_at'];
}

