<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    use HasFactory;

    // protected $connection = 'mysql';
    protected $table = 'backup_ratings';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_course',
        'final',
        'status',
        'fecha'
    ];
}
