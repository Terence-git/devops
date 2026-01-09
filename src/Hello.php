<?php
namespace App;

class Hello {
    public function sayHello(string $name): string {
        return "Bonjour, " . $name . "!";
    }
}