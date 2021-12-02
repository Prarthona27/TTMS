<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travellerlist extends Model
{
    use HasFactory;
    protected $table='travellers';
    protected $guarded=[];
}