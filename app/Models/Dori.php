<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dori extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
    ];
    public $timestamps = true;
}
