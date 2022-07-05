<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karzina2 extends Model
{
    use HasFactory;
    public $fillable = [
        'arxiv_name',
        'name', 
        'raqam',
        'soni', 
        'summa2', 
        'dona', 
        'itog',
    ];
    public $timestamps = true;
}
