<?php 

    $password = "pizza123";
    $hash = password_hash($password,PASSWORD_DEFAULT);

    if (password_verify("hamburger666",$hash)){
        echo "You are logged in";
    }else {
        echo "Incorrect password";
    }


?>