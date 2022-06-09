<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Sector extends Model
{
    use HasFactory;
    protected $table = 'sectors';
    protected $fillable = ['id','name', 'unit_id'];
    public function unit(){
        return $this->belongsTo(Unit::class);
    }
    public function folder(){
        return $this->hasMany(Folder::class);
    }
}
