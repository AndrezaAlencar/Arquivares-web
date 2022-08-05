<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class DocType extends Model
{
    use HasFactory, LogsActivity;
    public $tile = 'tipos de documentos';

    public static $logAttributes = ['name'];
    protected static $logOnlyDirty = true;

    protected $fillable = ['name'];
    protected $casts = [
        'id'=>'integer',
        'name'=>'string'];
    
    public function getCasts(){
        return $this->casts;
    }

    
}
