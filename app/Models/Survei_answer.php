<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei_answer extends Model
{
    use HasFactory;
    protected $table = 'survei_answer';
    protected $guarded = ['id'];
    
}
