<?php

namespace PHPixie;

class Migrate
{
    protected $builder;
    
    public function __construct($config)
    {
        $this->builder = $this->buildBuilder($config);
    }
    
    public function builder()
    {
        return $this->builder;
    }
    
    public function consoleCommands()
    {
        return $this->builder->commands();
    }
    
    public function migrator($name)
    {
        return $this->builder->migrator($name);
    }
    
    protected function buildBuilder($config)
    {
        return new Migrate\Builder($config);
    }
}