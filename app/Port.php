<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(App\User::class);
    }

    public function yachts(){
        return $this->hasMany(App\Yacht::class);
    }
}
