<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;


    //for user to create link
public function users()
{
    return $this->belongsTo(User::class);
}
}
