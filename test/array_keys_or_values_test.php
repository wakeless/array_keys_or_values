<?php

require_once __DIR__."/../array_keys_or_values.php";

class Array_Keys_Or_Values_Test extends PHPUnit_Framework_TestCase {

  function testAllKeys() {
    $input = array(
      "One" => "what",
      "Two" => "ever"
    );

    $this->assertEquals(array_keys($input), array_keys_or_values($input));
  }

  function testNoKeys() {
    $input = array("one", "two");
    $this->AssertEquals($input, array_keys_or_values($input));
  }

  function testBitOfBoth() {
    $input = array(
      "one" => "what",
      "two"
    );

    $this->assertEquals(array("one", "two"), array_keys_or_values($input));
  }

}

