<!DOCTYPE html>
<html>
<body>

<?php 
$Range_starting_number = 1; // Starting number for the for Range : Example: from 1 to 100 : 1 will be this number
$Range_Ending_number = 100; // Ending number for the for Range : Example: from 1 to 100 : 100 will be this number

$first_number = 3; // This is the first number to be disible by: In this case it is 3.
$Second_number = 5; // This is the Second number to be disible by: In this case it is 5.

$First_number_message = 'Planit'; // This is the first Message will be displayed if the number is divisible by 3 i.e($first_number).
$Second_number_message = 'Testing'; // This is the Second Message will be displayed if the number is divisible by 5 i.e($Second_numbe).

$combined_message = $First_number_message.' '.$Second_number_message; // This message will be displayed if the number is disible by both first


do {
  echo "<br>";
  
  if($Range_starting_number%$first_number == 0 && $Range_starting_number%$Second_number == 0 ) //Start of if --1
    {
    echo "$combined_message " ; 
    }//end of if --1
  
  elseif($Range_starting_number%$first_number == 0) //Start of elseif --2
    {
    echo "$First_number_message" ; 
     } //end of elseif --2

    elseif($Range_starting_number%$Second_number == 0) //Start of elseif --3
    {
    echo "$Second_number_message";
    }//end of elseif --3
      
    else //Start of else --4
    {
    echo($Range_starting_number); 
    } //end of else --4
  
  
  $Range_starting_number++; // Counter Increment
} while ($Range_starting_number <= $Range_Ending_number); // while condition to check the two numbers
?> 

</body>
</html>
