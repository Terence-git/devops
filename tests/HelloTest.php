<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase {
    public function testSayHello(): void {
        $hello = new Hello();
        $this->assertEquals("Bonjour, BTS SIO SLAM!", $hello->sayHello("BTS SIO SLAM"));
    }
}