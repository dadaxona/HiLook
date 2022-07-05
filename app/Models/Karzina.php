<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karzina extends Model
{
    use HasFactory;
    public $fillable = ['user_id','name', 'raqam', 'soni', 'dona','summa2', 'itog'];
    public $timestamps = true;
}
