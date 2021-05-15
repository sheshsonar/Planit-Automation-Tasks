<?php
// PHP program to replace space with - Challenge 3
 

$str = strrev("A computer science portal for geeks"); // Getting a string and using strrev function to reverse it.
 
for ($i = 0; $i < strlen($str); ++$i) // Traverse the string character by character.

{
 
   
  
    if ($str[$i] == ' ')  // Checking for the blank space in the string
    {
        $str[$i] = '-';   // Replacing the blank space with to the '-'.
    }
}
 

echo $str . "\n"; // Displaying the final string
