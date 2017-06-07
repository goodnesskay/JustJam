<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable=['performance_title','images','video','performance_description','created_by'];
}
