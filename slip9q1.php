<!-- Write a PHP script to print following floyd’s triangle.
1
2 3
4 5 6
7 8 9 10 -->
<?php
function FloydTriangle($n){
  $value = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$value "; 
      $value++;
    }
    echo "\n"; 
  }
}
FloydTriangle(4);
?>
