
<?php
$total = 0;

$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
for ($i = 0; $i < 10; $i++) {
  $varName = "score" . ($i + 1);
  $$varName = $scores[$i];
  $total += $$varName;
}
$average=$total/10;
echo $average;

?>