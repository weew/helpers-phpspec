<?php

namespace tests;

use PHPUnit_Framework_TestCase;

class PhpspecTest extends PHPUnit_Framework_TestCase {
    function test_it_functions_exists_and_works() {
        $this->assertTrue(it(1) == expect(1));
    }
}
