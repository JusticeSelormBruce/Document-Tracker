<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $guarded = [];

    public function offices()
    {
     return $this->hasMany(Offices::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
