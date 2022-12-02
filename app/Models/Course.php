<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'semester',
        'teacher',
        'description'
    ];

    //Relacion muchos a muchos con users
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a muchos con groups
    public function groups(){
        return $this->hasMany('App\Models\Group');
    }
}