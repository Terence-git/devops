<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class HelloTest extends TestCase {
    public function testSayHello(): void {
        $hello = new Hello();
        $this->assertEquals("Bonjour, BTS SIO SLAM!", $hello->sayHello("BTS SIO SLAM"));
    }

    public function testSayHelloEmpty(): void
    {
        $hello = new Hello();
        $this->assertEquals("Bonjour, !", $hello->sayHello(""));
    }

    public function testSpecialCharacters(): void
    {
        $hello = new Hello();
        $this->assertEquals("Bonjour, élodie!", $hello->sayHello("élodie"));
    }

    public function testNumericName(): void
    {
        $hello = new Hello();
        $this->assertEquals("Bonjour, 12345!", $hello->sayHello("1234e5"));
    }

    public function testReturnType(): void
    {
        $hello = new Hello();
        $this->assertIsString($hello->sayHello("Bob"));
    }
}