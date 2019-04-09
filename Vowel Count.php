<?php

/*
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, and u as vowels for this Kata.

The input string will only consist of lower case letters and/or spaces.

TEST:

class VovelCountCase extends TestCase
{
    public function testBasics() {
      $this->assertEquals(5, getCount("abracadabra"));
    }
}
*/

function getCount($str) {
  
  str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $str, $vowelsCount);
  
  return $vowelsCount;
}