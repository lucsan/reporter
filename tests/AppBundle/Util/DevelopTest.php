<?php

// tests/AppBundle/Util/DevelopTest.php
namespace Tests\AppBundle\Util;

class SomeClass
{
    public function doSomething()
    {
        // Do something.
    }
}

class DevelopTest extends \PHPUnit_Framework_TestCase
{
    public function testRun ()
    {
        $this->assertEquals(1, 1);
    }

    public function testStub ()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->getMockBuilder(SomeClass::class)
                     ->disableOriginalConstructor()
                     ->disableOriginalClone()
                     ->disableArgumentCloning()
                     ->disallowMockingUnknownTypes()
                     ->getMock();

        // Configure the stub.
        $stub->method('doSomething')
             ->willReturn('foo');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());

        $schema = $this->stubSchema();
        echo print_r($schema, true);
    }

    private function stubSchema ()
    {
        return [
            'order_id' => ['int', 100],
            'order_date' => ['datetime'],
            'order_store' => ['int', 50],
            'user_id' => ['varchar', 50],
            'product_sku' => ['varchar', 50],
            'order_value' => ['decimal', 2],
            'discount_code' => ['varchar', 50],
        ];
    }

    private function stubData ()
    {
        return [
            'order_id' => 1,
            'order_store' => 123,
            'user_id' => 123,
            'product_sku' => 123,
            'order_value' => 234,
            'discount_code' => 'qwerty',

        ];
    }
}
