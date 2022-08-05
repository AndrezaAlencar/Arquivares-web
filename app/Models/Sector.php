<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;
use Spatie\Activitylog\Traits\LogsActivity;

class Sector extends Model
{
    use HasFactory, LogsActivity;
    protected $title = 'setores';

    protected static $logAttributes = [
        'name',
        'id_unit'
    ];
    protected static $logOnlyDirty = true;

    protected $fillable = ['id','name', 'id_unit'];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'id_unit' => 'integer',
    ];

    public function getCasts(){
        return $this->casts;
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }
    public function sector()
    {
        return $this->hasMany(Sector::class, 'id_sector', 'id');
    }

}
