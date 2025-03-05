<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name' ,
        'email' ,
        'active' ,
        'img' ,
];
}
