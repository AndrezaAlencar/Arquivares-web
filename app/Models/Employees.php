<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;
use Spatie\Activitylog\Traits\LogsActivity;

class Employees extends Model
{
    use HasFactory, LogsActivity;
    public $title = "Funcionários";

    protected static $logAttributes = [
        'id_user',
        'id_sector',
        'name',
        'number',
        'email',
        'admission_at',
        'exoneration_at'
    ];
    protected static $logOnlyDirty = true;

    protected $fillable = [
        'id_user',
        'id_sector',
        'name',
        'number',
        'email',
        'admission_at',
        'exoneration_at'
    ];
    protected $casts = [
        'id'=>'integer',
        'id_user'=>'integer',
        'id_sector'=>'intege',
        'name'=>'string',
        'number'=>'string',
        'email'=>'string',
        'admission_at'=>'date',
        'exoneration_at'=>'date'
    ];

    public function getCasts(){
        return $this->casts;
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user','id')->whereIn('type',[2,3,4,5,6,7,8,9,10,11,12,13,14,16]);
    }

    public function city() {
        return $this->belongsTo(City::class, 'id_city', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit','id');
    }

    public function setActiveAttribute($value)
    {
        $this->attributes['active'] = boolval($value);
    }

    public function getAdmissionAtAttribute() {
         if ($this->attributes['admission_at'] != null) {
             $date = new DateTime($this->attributes['admission_at']);
             return $date->format('Y-m-d');
         }
     }

    public function getExonerationAtAttribute() {
         if ($this->attributes['exoneration_at'] != null) {
             $date = new DateTime($this->attributes['exoneration_at']);
             return $date->format('Y-m-d');
         }
    }
}
