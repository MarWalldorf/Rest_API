<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';
    protected $fillable = ['name', 'surname', 'phone', 'street', 'city','age'];
    use HasFactory;
}
