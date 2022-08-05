<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{   
    use HasFactory;
    public $tile = 'documentos';

    protected $connection = "mongodb";
    protected $collection = "docs";
    protected $dates = [
        
        'name',
        'type',
        'path'
    ];

    protected $fillable = [
   'id','name', 'path','type'
    ];

    public function docAttachment(){
        return $this->
    }

    public function docType()
    {
        return $this->belongsTo(DocType::class, 'id_doc_type', 'id');
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class, 'id_sector', 'id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'id_location', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }


   

}
