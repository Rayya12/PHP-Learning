<?php
    // this is variable
    $name = "Bro Code";
    $food = "pizza";
    $email = "fake123@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $text_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;


    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    echo "You are {$age} Years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is : {$gpa} <br>";
    echo "Your pizza is : \${$price} <br>"; // use backslash to not make confuse
    echo "The sale tax rate is {$text_rate} %";

    echo "Online Status {$online}"; // will not showed when false, if true 1

    $total = $price * $quantity;
    echo "Total is {$total}"

?>