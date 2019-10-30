<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function yachts(){
        return $this->hasOne(App\Yacht::class);
    }
    
    public function customers(){
        return $this->hasOne(App\Customer::class);
    }
}
