<?php

namespace App\Models;
use App\Models\Eventlist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travellerlist extends Model
{
    use HasFactory;
    protected $table='travellers';
    protected $guarded=[];

    public function events(){
        return $this->belongsTo(Eventlist::class,'Agency_id','id');
    }
}