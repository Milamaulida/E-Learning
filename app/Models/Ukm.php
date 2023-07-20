<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;
    protected $table = 'ukm';

    protected $fillable = ['name_ukm','type_ukm','since'];

    protected $dates = ['created_at', 'updated_at'];
}
