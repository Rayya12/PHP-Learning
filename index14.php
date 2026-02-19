<?php 

    setcookie("faf_food","pizza",time()+86400 *2,"/");
    setcookie("faf_drink","coffee",time()+(86400 * 3),"/" );

    // to delete time() - 0

    // key => value (assosiative array), time (in seconds), target directory

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    };

    // misalnya cookies untuk melihat apakah favorite food tertentu
    if (isset($_COOKIE["faf_food"])){
        echo "BUY Some {$_COOKIE["faf_food"]}";
    }else{
        echo "I Don't know your favorite food";
    }
?>