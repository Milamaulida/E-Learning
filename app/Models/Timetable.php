<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $table = 'timetable';

    protected $fillable = ['name_subject','code_subject','code_class'];

    protected $dates = ['created_at', 'updated_at'];
}
