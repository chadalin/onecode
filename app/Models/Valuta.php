<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuta extends Model
{
    use HasFactory;
    
    public $incrementing = false;
    
    protected $fillable = [
        
             'id',
            
            'price' ,
            'name' ,
            'active' ,
            'sotr', 
        
    ];
    
    
    
}

//




