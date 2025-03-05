<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
}
