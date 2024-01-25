<?php

use PHPUnit\Framework\TestCase;
use PhpunitUnitTesting\Box;

class BoxTest extends TestCase
{
    public $box;
    public function setUp():void
    {
        $this->box = new Box(['Potato', 'Carrot', 'Onion', 'Meat', 'Milk']);
    }

    
    public function test_has(){
        $this->assertContains('Potato', $this->box->items);
        $this->assertTrue($this->box->has('Meat'));
    }

    /** @test */

    public function take_one_and_remove()
    {
        $this->box->takeOne();
        $this->assertNotContains('Potato', $this->box->items);
    }

    public function test_start_with()
    {
        $result = $this->box->startsWith('M');
        $this->assertCount(2, $result);
        $this->assertContains("Milk", $result);
    }
}