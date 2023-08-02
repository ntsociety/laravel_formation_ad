<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'f_name',
        'phone',
        'adresse',
        'age',
        'salaire',
    ];
}
