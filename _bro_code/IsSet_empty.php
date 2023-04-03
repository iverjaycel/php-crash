<?php

    //isset() = Returns TRUE if a variable is declared and not NULL
    //empty() = Returns TRUE if a variable is not declared, false , null  
    
    $username = "";

    if(empty($username)){
        echo "This var is empty";
    }
    else{
        echo "This var is not empty";
    }

    
?>