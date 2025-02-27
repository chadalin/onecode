<?php
namespace App\Test;
class Tests
{   
    protected array $config;
    public function __construct($config){
        
        $this->config = $config;
    }
    public function config(string $key){
        
        return $this->config[$key] ?? null;
    }
}