<?php

include_once('src/FizzBuzz.php');
if (isset($_POST['min']) && isset($_POST['max'])) {
  $fizzbuzz = new FizzBuzz();
  $result = $fizzbuzz->get($_POST['min'], $_POST['max']);
  $result_count = $fizzbuzz->countFizzBuzz($result);
}

?>

<html>
<body>
  <h1>FizzBuzz 3</h1>
  <form action="" method="post">
    <p>Min: <input type="number" min="0" name="min" /></p>
    <p>Max: <input type="number" min="0" name="max" /></p>
    <p><input type="submit" /></p>
  </form>
  <?php if (isset($result)) { ?>
    <p> Result: <?php echo $result ."<br>";
    echo "fizz: ".$result_count["fizz"]."<br>";
    echo "buzz: ".$result_count["buzz"]."<br>";
    echo "fizzbuzz: ".$result_count["fizzbuzz"]."<br>";
    echo "lucky: ".$result_count["lucky"]."<br>";
    echo "integer: ".$result_count["integer"]."<br>";

    ?>
    </p>
  <?php } ?>

</body>
</html>

