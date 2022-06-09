<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $fillable = ['id', 'folder_id', 'user_id', 'name'];
    public function folder(){
        return $this->belongsTo(Folder::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
