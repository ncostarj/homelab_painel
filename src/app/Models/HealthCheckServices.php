<?php

class HealthCheckServices
{

    protected $services;

    public function setServices(array $services)
    {
        $this->services = $services;
        return $this;
    }

    public function check() {
        
    }
}
