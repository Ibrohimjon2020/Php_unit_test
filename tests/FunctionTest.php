<?php

use PHPUnit\Framework\TestCase;

require 'functions.php';

class FunctionTest extends TestCase
{
    public function test_add_number()
    {
        $this->assertSame(22, addNumbers(20, 2));

    }

    public function test_return_cars()
    {
        $this->assertIsArray(returnCars());
    }
}