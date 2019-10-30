<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yacht extends Model
{
    public $timestamps = false;

    public function ports(){
        return $this->belongsTo(App\Port::class, 'port_id');
    }

    public function reservations(){
        return $this->belongsTo(App\Reservation::class, 'yacht_id');
    }

    public function yachttypes(){
        return $this->hasOne(App\YachtType::class, 'yacht_type_id');
    }

}
