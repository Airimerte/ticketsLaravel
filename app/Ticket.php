<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function usuarios(){
        return $this->belongsTo('App\User');
    }
}
