
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
               <option value="fahrenheit">Kelvin</option>
        </select>
    </td>
</tr>



<tr>
    <td>Convert to:</td>
    <td><select name="convertTo" id="convertTo" size="1">
               <option disabled> Select a measurement type</option>
               <option value="celsius">Celsius</option>
               <option value="fahrenheit">Fahrenheit</option>
               <option value="fahrenheit">Kelvin</option>
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
    // $fahrenheit_conversion_Value = ((9/5) * $valueConvert) + (32);
    // $celsius_conversion_value = ($valueConvert - 32) * (5/9);
    // $Kelvin_conversion_value = ($valueConvert - 32) * (5/9);

   if($convertFrom == "fahrenheit" && $convertTo == "celsius"){
       $conversion = ((9/5) * $valueConvert) + (32);
   }
    else if ($convertFrom == "celsius"){
       $conversion = ($valueConvert - 32) * (5/9);
   }
   else if ($convertFrom == "Kelvin"){
    $conversion = ($valueConvert - 32) * (5/9);
}
   return $conversion;
}


$valueConvert= $_POST['valueConvert'];
$valueConvertFrom = $_POST['convertFrom'];
$convertTo = $_POST['convertTo'];



$conversion = tempConvert($valueConvert,$valueConvertFrom,$convertTo);
echo "The initial temperature was $valueConvert. The new temperature is $conversion.";

?>