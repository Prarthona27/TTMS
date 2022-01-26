<?php

namespace App\Models;
use App\Models\Agencylist;
use App\Models\Travellerlist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventlist extends Model
{
    use HasFactory;
    protected $table='_event_list';
    protected $guarded=[];


    public function agency(){
        return $this->belongsTo(Agencylist::class,'Agency_id','id');
    }
    public function travelers(){
        return $this->belongsTo(Travellerlist::class,'package_id','id');
    }
}
