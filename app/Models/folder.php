<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folder extends Model
{
    use HasFactory;
    protected $table = 'folders';
    protected $fillable = ['id', 'sector_id', 'name', 'idade'];
    public function sector(){
        return $this->belongsTo(Sector::class);
    }
    public function file(){
        return $this->hasMany(Files::class);
    }
}
