<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;


//for user to create blog
public function users()
{
    return $this->belongsTo(User::class);
}
//for comments
public function comments()
{
    return $this->hasMany(Comment::class);
}
}
