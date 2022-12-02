<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'teacher',
        'course',
        'schedule',
        'course_id',
        'teacher_id'
    ];

    //Relacion muchos a muchos con users
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a muchos (inversa) con courses
    public function courses(){
        return $this->belongsTo('App\Models\Course');
    }
}
