<?php
namespace App\Test\Fasades;
use Illuminate\Support\Facades\Facade;
class Tests extends Facade
{   
   public static function getFacadeAccessor(){
       return 'tests';
   }
}