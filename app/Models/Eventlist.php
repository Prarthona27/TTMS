<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventlist extends Model
{
    use HasFactory;
    protected $table='_event_list';
    protected $guarded=[];
}