<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arxiv extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'itogs',
        'naqt',
        'plastik',
        'bank',
    ];
    public $timestamps = true;
}
