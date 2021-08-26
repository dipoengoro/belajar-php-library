<?php

namespace Deubo\BelajarPhpLibrary;

class Customer
{

    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Budi"): string
    {
        return "Hello $name, my name is $this->name";
    }

}
