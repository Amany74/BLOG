<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    use HasFactory;
    
       //for user to create vote
public function users()
{
    return $this->belongsTo(User::class);
}
}
