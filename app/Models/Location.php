<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Location extends Model
{
    use HasFactory, LogsActivity;

    public $title = 'localização';

    protected static $logAttributes = [
        'id_sector',
        'description',
    ];
    protected static $logOnlyDirty = true;

    protected $fillable = [
        'id_sector',
        'description'
    ];

    protected $casts = [
        'id' => 'integer',
        'id_sector' => 'integer',
        'description' => 'string',
        
    ];

    public function sector()
    {
        return $this->belongsTo(Sector::class, 'id_sector', 'id');
    }
    public function getCasts(){
        return $this->casts;
    }


}
