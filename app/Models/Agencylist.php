<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencylist extends Model
{
    use HasFactory;
    protected $table='agencies';
    protected $guarded=[];
}
