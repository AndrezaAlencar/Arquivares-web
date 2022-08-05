<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Unit extends Model
{
    use HasFactory, LogsActivity;
    public $title = 'unidades';

    protected static $logsAttributes =[
       'id_city',
       'name',
       'active'
    ];
    protected static $logOnlyDirty = true;

    protected $fillable = [
        'id_city',
        'name',
        'active'
    ];
    protected $casts =[
        'id'=>'integer',
        'id_city'=>'integer',
        'name'=>'string',
        'active'=>'boolean'
    ];

    public function getCasts(){
        return $this->casts;
    }
    public function city(){
        return $this->hasMany(City::class, 'id_city', 'id');
    }


}
