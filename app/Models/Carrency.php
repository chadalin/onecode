<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrency extends Model
{
    use HasFactory;
    
    public $incrementing = false;
    
    protected $fillable = [
            'id',
            'name' ,
            'price' ,
            'active' ,
            'sort' ,
    ];
    
    protected $hidden = [
        
        'price',
    ];
    
    protected $casts = [
        
        'price' => 'float',
    ];
    
    protected $dates = [
        'active_at',
    ];
}
