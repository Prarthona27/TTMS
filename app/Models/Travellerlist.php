<?php

namespace App\Models;
use App\Models\Eventlist;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travellerlist extends Model
{
    use HasFactory;
    protected $table='travellers';
    protected $guarded=[];

    public function events(){
        return $this->belongsTo(Eventlist::class,'package_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}