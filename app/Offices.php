<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    protected $guarded = [];

    public function  department(){
        return $this->belongsTo(Departments::class);
    }


    public function user(){
        return $this->belongsToMany(User::class);
    }
}
