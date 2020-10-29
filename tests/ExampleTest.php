<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    /** @test */
    public function example() {
        $this->assertTrue(true);
    }

    /** @test */
    public function anotherTest() {
        $this->assertTrue(true);
    }
}