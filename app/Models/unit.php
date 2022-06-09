<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;
    protected $table = 'units';
    protected $fillable = ['id', 'name','active'];
    public function sector(){
        return $this->hasMany(Sector::class);
    }

}
