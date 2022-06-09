<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file_tag extends Model
{
    use HasFactory;
    protected $table = 'file_tags';
    protected $fillable = ['id', 'name', 'file_id', 'tag_id'];
    public function file(){
        return $this->belongsTo(File::class);
    }
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
