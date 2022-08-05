<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class City extends Model
{
    use HasFactory, LogsActivity;
    public $tile = 'cidades';

    public static $logAttributes = ['name'];
    protected static $logOnlyDirty = true;

    protected $fillable = ['name'];
    protected $casts = [
        'id'=>'integer',
        'name'=>'string'];
    
    public function getCasts(){
        return $this->casts;
    }

    public function city(){
        return $this->belongsTo(City::class, 'id_city', 'id');
    }
}
