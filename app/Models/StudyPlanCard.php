<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyPlanCard extends Model
{
    use HasFactory;
    protected $table = 'study_plan_card';

    protected $fillable = ['name_student','nim','name_subject','code_subject','code_class','sks'];

    protected $dates = ['created_at', 'updated_at'];
}

