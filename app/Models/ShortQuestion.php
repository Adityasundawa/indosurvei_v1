<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortQuestion extends Model
{
    use HasFactory;
    protected $table = 'short_question';
    protected $guarded = ['id'];
}
