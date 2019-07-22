<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //$guarded is the opposite of $fillable, saying which properties CANNOT be changed
    // setting $guarded = [] means that you are okay with receiving any type of input
    protected $fillable = [
        'title', 'description'
    ];
}
