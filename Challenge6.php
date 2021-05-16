

<!DOCTYPE HTML>

<html>
<head> 
      <title>Food Ordering System</title>
      <meta charset="utf-8">
</head> 


<body>
      <form name="tempConvert" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

<table>



<tr>

    <td>
        Please enter the food Name:
            <ol>    
                <li> Burger</li>
                <li> Pizza</li>
                <li> Noodles</li>
                <li> Pasta</li>
            </ol>
    </td>
  
</tr>


<tr>
<td><input type="text" name="foodname" id="foodname" size="15"></td>
<td><input type="submit" name="btnConvert" id="btnConvert" value="Submit"></td>
</tr>



</form>


<?php


function tempConvert($foodname)
{
    include_once('dbconnection.php');

    $sql = "SELECT * 
                        FROM food_ordering 
                        Where user_choice = '$foodname'";
                        


                        $result = mysqli_query($conn,$sql);

                        // $result = $conn->query($sql);

                        
                        if (!empty($result) && $result->num_rows > 0) {


                        while ($row = $result->fetch_assoc())
                            {
                              $order_id=$row['id'];
                              $food_price = $row['price'];
                              $restaurant_name = $row['restaurant'];
                              $Customer_name = $row['user'];
                              $user_choice = $row['user_choice'];




                              ?><br> <br><?php
                                $out = fopen('php://output', 'w'); //output handler
                                fputs($out, " <div class='recepit'>************Receipt*************** <br> <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp; <b>Receipt No : $order_id </b><br>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hi $Customer_name  <br>

                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                Your order from  $restaurant_name would be  <br>


                                     
                                
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                1 X $user_choice = $$food_price <br>
                                Thank you for choosing us! Visit again<br>
                                         <br>  ********************************** <div>"); //writing output operation
                                fclose($out); //closing handler 


                        //   echo($restaurant_name.','.$user_choice.', $'.$food_price);


                               ?> 
                            






            

            <?php }
                        }
                        else {
                            echo "0 results";
                        }
                        
                        $conn->close();


}


$foodname = $_POST['foodname']; // Getting a value to convert from user example. 34, 34, 123 etc.
tempConvert($foodname); // Function call to convert temp which includes three parameters input convert from and conert to example : 32, “C”, “K”
// echo "The initial temperature was $foodname";

?>