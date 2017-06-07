<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['booking_title','event_date','event_state',
                        'event_address','created_by','status','booking_description'];
}
