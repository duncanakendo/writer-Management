<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function users(){
        $this->hasMany(User::class);
    }
}
