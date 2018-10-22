<?php
namespace SampleApp\Helpers;

use SampleApp\Helpers\Implementable;

class Hello implements Implementable
{
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function greet()
    {
        return "Hello {$this->name}!";
    }

    public function example(){
    	return "This is example of interface";
    }
}
