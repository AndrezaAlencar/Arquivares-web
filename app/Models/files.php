<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $fillable = ['id', 'user_id', 'name'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function folder(){
        return $this->belongsTo(Folder::class);
    }
}
