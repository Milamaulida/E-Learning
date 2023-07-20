<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = 'bill';

    protected $fillable = ['name_student','nim','name_major','name_class','the_amount_of_the_bill'];

    protected $dates = ['created_at', 'updated_at'];
}

