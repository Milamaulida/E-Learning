<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsAssociation extends Model
{
    use HasFactory;
    protected $table = 'students_association';
    
    protected $fillable = ['name_set','name_head_of_set',];

    protected $dates = ['created_at', 'updated_at'];
}
