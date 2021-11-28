

<?php
$numbers = [1, 2, 3, 4, 5];
function judge(int $number) {
  if($number % 2 == 0){
    echo $number . "は偶数です。" . PHP_EOL;
  }else{
    echo $number . "は奇数です。" . PHP_EOL;
  }
}
foreach ($numbers as $number) {
  judge($number);
}

?>