
<!DOCTYPE HTML>

<html>
<head> 
      <title>Temp Conversion</title>
      <meta charset="utf-8">
<body>
      <form name="tempConvert" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>
<tr>
    <td>Enter value to convert</td>
    <td><input type="text" name="valueConvert" id="valueConvert" size="15"></td>
</tr>



<tr>
    <td>Convert From:</td>
    <td><select name="convertFrom" id="convertFrom" size="1">
               <option disabled> Select a measurement type</option>
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
               <option value="Kelvin">Kelvin</option>
        </select>
    </td>
</tr>



<tr>
    <td>Convert to:</td>
    <td><select name="convertTo" id="convertTo" size="1">
               <option disabled> Select a measurement type</option>
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
               <option value="Kelvin">Kelvin</option>
        </select>
    </td>
</tr>






<tr>
    <td><input type="submit" name="btnConvert" id="btnConvert" value="Convert"></td>
    <td><input type="reset" name="btnReset" id="btnReset" value="Reset"></td>
</tr>



</form>


<?php

function tempConvert($valueConvert,$convertFrom,$convertTo)
{
    

   if($convertFrom == "fahrenheit")     // If user choose fahrenheit as a option
   { //Start of fahrenheit if----------
    if($convertFrom == "fahrenheit" && $convertTo == "celsius") 
    {
        $conversion = ($valueConvert - 32) * (9/5);

    }
    else{$conversion = ($valueConvert - 32) * (5/9)+273.15 ;}
   }//StaEnd of fahrenheit if statement------


    else if ($convertFrom == "celsius") // If user choose celsius as a option
     {//Start of celsius if----------
        if($convertFrom == "celsius" && $convertTo == "fahrenheit") 
            {
             $conversion = ($valueConvert * (9/5) ) +32;
            
            }
        
            else{$conversion = ($valueConvert +273.15);}
   }//End of celsius if statement------
   

   else if($convertFrom == "Kelvin") // If user choose Kelvin as a option
   {//Start of Kelvin if----------
    $conversion = ($valueConvert - 32) * (5/9);

    if($convertFrom == "Kelvin" && $convertTo == "fahrenheit")
    {
     $conversion = ($valueConvert -273.15) * 9/5 + 32;
    
    }

    else{$conversion = ($valueConvert -273.15);}

}//End of Kelvin if----------
   return $conversion;// Returns the results to the function
}


$valueConvert= $_POST['valueConvert'];
$convertFrom = $_POST['convertFrom'];
$convertTo = $_POST['convertTo'];



$conversion = tempConvert($valueConvert,$convertFrom,$convertTo); // Function call to convert temp which includes three parameters input convert from and conert to example : 32, “C”, “K”
echo "The initial temperature was $valueConvert. The new temperature is $conversion.";

?>