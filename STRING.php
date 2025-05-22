<?php
$text = "Hello World!";
echo strlen($text); // Returns the length of the string
echo str_word_count($text); // Returns the number of words in the string
print_r(str_word_count($text, 1)); // Returns an array containing all the words in the string
print_r(str_word_count($text, 2)); // Returns an associative array with the position of each word in the string
echo strrev($text); // Returns the string in reverse order
echo strpos($text, 'll'); // Returns the position of the first occurrence of 'll' in the string
echo strpos($text, 'll',9); // Returns the position of the first occurrence of 'll' in the string, starting from position 9
echo stripos($text, 'll'); // Returns the position of the first occurrence of 'll' in the string, case-insensitive
echo stripos($text, 'll',9); // Returns the position of the first occurrence of 'll' in the string, case-insensitive, starting from position 9
echo strpos($text,'Ll'); // Returns the position of the first occurrence of 'll' in the string CASE SENSITIVE
echo strpos($text,'ll',9); // Returns the position of the first occurrence of 'll' in the string, starting from position 9 CASE SENSITIVE
echo str_replace('ll','xx', $text); // Replaces all occurrences of 'll' in the string with 'XX'


















