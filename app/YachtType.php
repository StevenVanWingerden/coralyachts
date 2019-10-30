<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YachtType extends Model
{
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(App\User::class);
    }

    public function yachts(){
        return $this->belongsTo(App\Yacht::class);
    }
}
