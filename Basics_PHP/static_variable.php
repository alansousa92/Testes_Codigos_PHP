<?php
function test() {
  static $count = 0;
  echo $count . "\n";
  $count++;
}

for ($i = 0; $i <= 4; $i++) {
  test();
}
