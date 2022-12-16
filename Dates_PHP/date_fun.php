<?php

$temp = 'The date is ';
echo $temp . longDate(time()) . "\n";

function longDate($timestamp){
  return date('l F jS Y', $timestamp);
}
