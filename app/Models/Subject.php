<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subject';

    protected $fillable = ['name_subject','code_subject','sks','description'];

    protected $dates = ['created_at', 'updated_at'];
}

