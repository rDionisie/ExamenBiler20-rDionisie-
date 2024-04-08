<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalObject extends Model
{
    use HasFactory;

    protected $table = 'goals';

    protected $fillable = [
        'name',
        'description',
        'due_date',
    ];
}
