<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Movie extends Model
{
    public function genres() 
    {
        return $this->belongsToMany(Genre::class);
    }

    public function people() 
    {
        return $this->belongsToMany("App\Person");
    }
}
