<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>    
</body>

<?php

    // create a function that will calculate the total price of the order
    // the function should take 3 parameters: item, price, quantity
    
    $item = "apple";
    $price = 5.99;
    $quantity = $_POST ["quantity"]; //cache var quantity
    $total = null;

    $total = $quantity*$price;

    echo"You have orders {$quantity} x {$price} /s <br>";
    echo"Your total is: \${$total}"
?>
</html>