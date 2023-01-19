<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typesurvey extends Model
{
    use HasFactory;
    protected $table = 'type_survey';
    protected $guarded = ['id'];
}
