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
    username <br>
    <input type="text" name="username"> <br>
    <input type="submit" name="login" value="login"> <br>
    age <br>
    <input type="text" name="age"> <br>
    <input type="submit" name="login" value="login"> <br>
    E-mail <br>
    <input type="text" name="email"> <br>
    <input type="submit" name="login" value="login"> <br>
   </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST,"username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        // 
        $age = filter_input(INPUT_POST,"age",
                            FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email",
                            FILTER_SANITIZE_EMAIL);

        
        // echo"You are {$username} and {$age} years old <br> {$email}";
        echo"{$email}";

    }

?>
