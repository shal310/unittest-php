<?php

  require "fizzbuzz.php";

  class FizzBuzzTest extends PHPUnit_Framework_TestCase {

    public function test_divisible_by_3_with_exception_string() {
      $this->setExpectedException("InvalidArgumentException");
      $num = "abc";
      $this->fail(is_divisible_by_3($num));
    }

    public function test_divisible_by_3_with_exception_array_type() {
      $this->setExpectedException("InvalidArgumentException");
      $num = array("1", "2", "3", "abc");
      $this->fail(is_divisible_by_3($num));
    }

    public function test_divisible_by_3_with_exception_float_type() {
      $this->setExpectedException("InvalidArgumentException");
      $num = 15.0;
      $this->fail(is_divisible_by_3($num));
	}

    public function test_divisible_by_3_with_exception_float_type_1() {
      $this->setExpectedException("InvalidArgumentException");
      $num = 0.1;
      $this->fail(is_divisible_by_3($num));
    }


    public function test_divisible_by_3() {

      $num = is_divisible_by_3(0);
      $this->assertTrue($num);

      $num = -1
      $this->assertFalse(is_divisible_by_3($num));

      $num = 3;
      $this->assertTrue(is_divisible_by_3($num));

      $num = 4;
      $this->assertFalse(is_divisible_by_3($num));

      $num = 65535;
      $this->assertTrue(is_divisible_by_3($num));

      $num = 65534;
      $this->assertFalse(is_divisible_by_3($num));

      $num = -65534;
      $this->assertFalse(is_divisible_by_3($num));

	  $num = 01;
      $this->assertFalse(is_divisible_by_3($num));
    }    

    public function test_is_divisible_by_5()
    {
    	$true_or_false = is_divisible_by_5(15);
    	$this->assertTrue($true_or_false);

    	$true_or_false = is_divisible_by_5(16);
    	$this->assertFalse($true_or_false);

    	$true_or_false = is_divisible_by_5(20);
    	$this->assertEquals($true_or_false, True);

    	$true_or_false = is_divisible_by_5(0);
    	$this->assertTrue($true_or_false);

	   	$true_or_false = is_divisible_by_5(-1);
    	$this->assertFalse($true_or_false);

    }


    public function test_is_divisible_by_5_exceptions_array() 
    {
    	$this->setExpectedException("InvalidArgumentException");
        $this->fail(is_divisible_by_5(array(15, 10)));
    }

    public function test_is_divisible_by_5_exceptions_string() 
    {
    
    	$this->setExpectedException("InvalidArgumentException");
    	$this->fail(is_divisible_by_5('abc'));
    }

    public function test_is_divisible_by_5_exceptions_float() 
    {
    
    	$this->setExpectedException("InvalidArgumentException");
    	$this->fail(is_divisible_by_5(.1));
    }

	public function test_fizz_buzz_totals()
	{
		list($fizz, $buzz, $fizzbuzz, $nofizzbuzz) = fizz_buzz_totals(16);
		$this->assertEquals(count($fizz),5);
		$this->assertEquals(count($buzz),3);
		$this->assertEquals(count($fizzbuzz),1);
		$this->assertEquals(count($nofizzbuzz),9);

		list($fizz, $buzz, $fizzbuzz, $nofizzbuzz) = fizz_buzz_totals(0);
		$this->assertEquals(count($fizz),0);
		$this->assertEquals(count($buzz),0);
		$this->assertEquals(count($fizzbuzz),0);
		$this->assertEquals(count($nofizzbuzz),0);
		
	}
	
	public function test_fizz_buzz_totals_exceptions() 
    {
    
    	$this->setExpectedException("InvalidArgumentException");
    	$this->fail(fizz_buzz_totals(.1));
    }

    public function test_fizz_buzz_totals_exception_string() 
    {
    
    	$this->setExpectedException("Exception");
    	$this->fail(fizz_buzz_totals("abc"));
    }
  }
?>
 
