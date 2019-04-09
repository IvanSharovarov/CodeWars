<?php

/*
Write a function named repeater() that takes two arguments (a string and a number), 
and returns a new string where the input string is repeated that many times.

Example:
Repeater.repeat("a", 5)
should return

"aaaaa"
*/

function solution($s, $n) {
  $i = 0;
  $new = '';
  while($i < $n) {
    $new .= $s;
    $i++;
  }
  return $new;
}
