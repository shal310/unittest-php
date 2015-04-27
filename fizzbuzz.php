<?php

function is_divisible_by_5($num) {
check_for_integer_type($num);
  $is_div = $num % 5 == 0;
  return $is_div;
}

function is_divisible_by_3($num) {
  // echo "\n" . $num ." \n";
  check_for_integer_type($num);

  $is_div = $num % 3 == 0;
  return $is_div;
}

function check_for_integer_type($num) {
    if(gettype($num) != "integer") {
      throw new InvalidArgumentException("Argument type must be integer");
    }
}

// function is_divisible_by_3_and_5($num) {
//   $is_div = is_divisible_by_5($num) && is_divisible_by_3($num);
//   return $is_div;
// }


function fizz_buzz_totals($n){

  check_for_integer_type($n);
  
  $total_fizz = array();
  $total_buzz = array();
  $total_fizz_buzz = array();
  $total_non_fizz_buzz = array();

  for ($i=1; $i<=$n; $i++){
    $divisible_by_3 = false;
    $divisible_by_5 = false;

    if(is_divisible_by_3($i)){
      $divisible_by_3 = true;
      // echo "Fizz";
      array_push($total_fizz, $i);
    }
    if(is_divisible_by_5($i)){
      $divisible_by_5 = true;
      // echo "Buzz";
      array_push($total_buzz, $i);
    }
    if ($divisible_by_3 && $divisible_by_5) {
      array_push($total_fizz_buzz, $i);
    }
    if (!($divisible_by_3 || $divisible_by_5)) {
      // echo $i;
      array_push($total_non_fizz_buzz, $i);
    }
    // echo "\n";
  }
  return array($total_fizz, $total_buzz, $total_fizz_buzz, $total_non_fizz_buzz);
}

// list($fizz, $buzz, $fizzbuzz, $nofizzbuzz) = fizz_buzz_totals(16);

// echo count($fizz);
// echo count($buzz);
// echo count($fizzbuzz);
// echo count($nofizzbuzz);


?>
