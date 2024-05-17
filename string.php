<?php
function countVowels($string){
    $vowels=['a','e','i','o','u','A','E','I','O','U'];
    $count=0;
    $stringLen=strlen($string);

    for($i=0; $i<$stringLen; $i++){
        if(in_array($string[$i],$vowels)){
            $count++;
        }
    }
    return $count;
}

function reverseString($string){
    return strrev($string);

}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    $vowelCount=countVowels($string);
    $reversedString=reverseString($string);
    echo"Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString \n";
}