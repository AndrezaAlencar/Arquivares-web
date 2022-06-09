<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = ['id', 'name'];
    public function file_tag(){
        return $this->hasMany(File_tag::class);
    }
}
