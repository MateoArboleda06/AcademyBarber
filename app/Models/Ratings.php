<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_group',
        'tracing',
        'partial_one',
        'partial_two',
        'final',
        'status'
    ];
}
