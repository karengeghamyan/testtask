<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrackingCode extends Model
{
    protected $table = 'tracking_codes';

    protected $fillable = ['name', 'active', 'position_id', 'code', 'timer'];
}