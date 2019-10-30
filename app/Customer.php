<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function reservations(){
        return $this->belongsTo(App\Reservation::class, 'customer_id');
    }
}
