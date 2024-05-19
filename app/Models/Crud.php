<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'user'; // Important Please Check all time
    protected $fillable = ['fname','lname','gender','qualification'];
}
