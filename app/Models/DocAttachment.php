<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class DocAttachment extends Model
{
    use HasFactory, LogsActivity;
    public $tile = 'anexos';

    protected $connection = "mongodb";
    protected $collection = "docAttachment";

    public static $logAttributes = ['name'];
    protected static $logOnlyDirty = true;

    protected $fillable = ['name', 'type', 'path'];
    protected $casts = [
        'id'=>'integer',
        'name'=>'string',
        'type'=>'integer'];
    
    public function getCasts(){
        return $this->casts;
    }
    
}
