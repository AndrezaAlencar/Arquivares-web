<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PermissionsProfile extends Model
{
    use HasFactory, LogsActivity;
    public $table = "Permissões por perfil";

    protected static $logAttributes = [ 
        'id_author',
        'id_sector',
        'id_employee',
        'active',
        'show',
        'save',
        'update',
        'destroy'
    ];
    protected static $logOnlyDirty = true;

    protected $fillable =[
        'id_author',
        'id_sector',
        'id_employee',
        'destroy',
        'save',
        'show',
        'update',
        'active'
    ];
    protected $casts =[
        'id_author' => 'integer',
        'id_sector' => 'integer',
        'id_employee' => 'integer',
        'destroy' => 'integer',
        'save' => 'integer',
        'show' => 'integer',
        'update' => 'integer',
        'active' => 'integer'
    ];
    public function getCasts(){
        return $this->casts;
    }
    public function employee(){
        return $this->belongsTo(Employee::class, 'id_employee','id');
    }
    public function author(){
        return $this->belongsTo(User::class,'id_author','id');
    }
    public function setDestroyAttribute($value){
        $this->attributes['destroy'] = boolval($value);
    }
    public function setSaveAttribute($value){
        $this->attributes['save'] = boolval($value);
    }
    public function setShowAttribute($value){
        $this->attributes['show'] = boolval($value);
    }
    public function setUpdateAttribute($value){
        $this->attributes['update'] = boolval($value);
    }
    public function setActiveAttribute($value){
        $this->attributes['active'] = boolval($value);
    }

    public function getDestroyAttribute()
    {
        return (isset($this->attributes['destroy']) ? boolval($this->attributes['destroy']) : null);
    }
    public function getSaveAttribute()
    {
        return (isset($this->attributes['save']) ? boolval($this->attributes['save']) : null);
    }
    public function getShowAttribute()
    {
        return (isset($this->attributes['show']) ? boolval($this->attributes['show']) : null);
    }
    public function getUpdateAttribute()
    {
        return (isset($this->attributes['update']) ? boolval($this->attributes['update']) : null);
    }
    public function getActiveAttribute()
    {
        return (isset($this->attributes['active']) ? boolval($this->attributes['active']) : null);
    }

}
