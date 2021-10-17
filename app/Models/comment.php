<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

//blog has many comments
public function blogs()
{
    return $this->belongsTo(Blog::class);
    return $this->belongsTo(User::class);
}

}
