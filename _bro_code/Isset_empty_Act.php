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
        <label>Username: </label> <br>
        <input type="text" name="username"><br>
        
        <label>Password: </label><br>
        <input type="password" name="password"><br>
        
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>
<?php
    
    //isset() = Returns TRUE if a    variable is declared and not NULL
    //empty() = Returns TRUE if a variable is not declared, false , null  
    
    foreach($_POST as $key => $value){
        echo "{$key} = {$value} <br>";
    }
   
    // if(isset($_POST['login'])){
    //     echo"You tried to login";
    // }
    
    
    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // check if the user is empty
        if(empty($username)){
            echo"Username is missing";
        }
        //check if the passowrd is empty
        elseif(empty($password)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$username} <br>";
        }
    }
    
?>