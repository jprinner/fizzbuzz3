<?php

class FizzBuzz {

  public function get($min=1, $max=20){
    $return = [];

    if (!is_numeric($min) || !is_numeric($max)){
      return "Error: Not a valid number.";
    }
    if ($max < $min){
      return "Error: Max input is less than the min.";
    }

    for ($i = $min; $i <= $max; $i++) {

      $contains_3 = false;
      $num = $i;
      while ($num > 0) {
        if ($num % 10 == 3)
        $contains_3 = true;
        $num = $num / 10;
      }

      if ($i == 0) {
        $return[] = 0;
      } elseif ($contains_3) {
        $return[] = "lucky";
      } elseif ($i % 15 == 0) {
        $return[] = "fizzbuzz";
      } elseif ($i % 3 == 0) {
        $return[] = "fizz";
      } elseif ($i % 5 == 0) {
        $return[] = "buzz";
      } else {
        $return[] = $i;
      }
    }

    $return = implode(" ", $return);

    return $return;
  }
  public function countFizzBuzz($result = null){

    $result = explode(" ", $result);
    $freqs = array_count_values($result);
    $total_count = count($result);
    $freqs["integer"] = $total_count-$freqs["fizz"]-$freqs["buzz"]-$freqs["fizzbuzz"]-$freqs["lucky"];

    return $freqs;
  }
}