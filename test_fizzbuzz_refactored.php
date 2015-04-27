<?php

  require "fizzbuzz_refactored.php";

  class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function setUp(){ 
      parent::setUp();
    }
    public function tearDown(){ 
      parent::tearDown();
    }

    private function divisible_by_with_exception_string($divisible_by) {
      echo "\n in divisible_by_with_exception_string";
      $this->setExpectedException("InvalidArgumentException");
      $num = "abc";
      $this->fail(is_divisible_by($num, $divisible_by));
    }

    private function divisible_by_with_exception_array_type($divisible_by) {
      echo "\n in divisible_by_with_exception_array_type";
      $this->setExpectedException("InvalidArgumentException");
      $num = array("1", "2", "3", "abc");
      $this->fail(is_divisible_by($num, $divisible_by));
    }

    private function divisible_by_with_exception_float_type($divisible_by) {
      echo "\n in divisible_by_with_exception_float_type";


      $this->setExpectedException("InvalidArgumentException");

      $num = 15.0;
      $this->fail(is_divisible_by($num, $divisible_by));

      $num = 0.1;
      $this->fail(is_divisible_by($num, $divisible_by));

      $num = 01; //Double type
      $this->fail(is_divisible_by($num, $divisible_by));
    }

    private function divisible_by_success($divisible_by) {
      echo "\n In divisible_by_success";

      $num = 0;
      $this->assertTrue(is_divisible_by($num, $divisible_by));

      $num = 15;
      $this->assertTrue(is_divisible_by($num, $divisible_by));

      $num = 225;
      $this->assertTrue(is_divisible_by($num, $divisible_by));

      $num = 0;
      $this->assertTrue(is_divisible_by($num, $divisible_by));

    }

    private function divisible_by_failures($divisible_by) {
      echo "\n In divisible_by_failures";

      $num = -1;
      $this->assertFalse(is_divisible_by($num, $divisible_by));

      $num = 4;
      $this->assertFalse(is_divisible_by($num, $divisible_by));

      $num = 31;
      $this->assertFalse(is_divisible_by($num, $divisible_by));

      $num = 65534;
      $this->assertTrue(is_divisible_by($num, $divisible_by));

      $num = -65534;
      $this->assertFalse(is_divisible_by($num, $divisible_by));

    }

    public function test_divisible_by_3_array_type() {
      $this->divisible_by_with_exception_array_type(3);
    }

    public function test_divisible_by_3_float_type() {
      $this->divisible_by_with_exception_float_type(3);
      $this->divisible_by_with_exception_string(3);
      $this->divisible_by_failures(3);
      $this->divisible_by_success(3);
      // $this->divisible_by_3_only();
    }

    public function test_divisible_by_5() {
      $this->divisible_by_with_exception_array_type(5);
      $this->divisible_by_with_exception_float_type(5);
      $this->divisible_by_with_exception_string(5);
      $this->divisible_by_failures(5);
      $this->divisible_by_success(5);
      // $this->divisible_by_5_only();
    }



  }
?>
 
