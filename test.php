<?php

$count = 0;
for ($i = 10; $count < 10; $i++) {
  $n = $i;

  $sum = 0;
  $has7 = 0;
  while ($n > 0) {
    $sum += $n % 10;
    if ($n %10 == 7) {
      $has7 = 1;
    }

	$n = intdiv($n, 10);
  }

  if ($has7 && $sum == 10) {
    echo $i . '<br />';
    $count++;
  }

}

?>
