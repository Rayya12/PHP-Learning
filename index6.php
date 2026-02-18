<?php 

    $age = 21;
    $grade = "A";

    if ($age >= 18){
        echo "You may enter this site";
    }else if ($age == 0){
        echo "Age not valid";
    }else{
        echo "You must be 18+ to enter";
    }

    # && || ! for logical operation

    switch($grade){
        case "A":
            echo "You did great";
            break;
        case "B":
            echo "You did good";
            break;
        case "C":
            echo "You did poorly";
            break;
        case "D":
            echo "You Did poortly";
            break;
        default:
            echo "Not valid";
    }

    echo date("l"); // menampilkan format hari, kalau format lain tanya GPT

    // for loop
    for($i=1;$i<=5;$i++){
        echo "hello";
    }


    $running = true;
    while($running){
        if (isset($_POST["stop"])){ // is set ini untuk melihat apakah value di set atau tidak
            $running = false;
        }else{
            echo "hahahhha";
        }
    }

    $food = array("apple","orange","banana","coconut");
    echo $food[0];

    $foods[0] = "DragonFruit";
    #array_push($foods,"Pinapple","peer");
    #array_pop($foods);
    #array_shift($foods);
    $reversed_array = array_reverse($foods);
    echo count($foods);


    foreach ($foods as $food){
        echo $food ."<br>";
    }

    #assosiative array
    $capitals = array(
        "USA" => "Washington",
        "Japan" => "Tokyo",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    );

    array_pop($capitals);
    array_shift($capitals);
    $keys = array_keys($capitals);
    $values = array_values($capitals);
    $new_array = array_flip($capitals);
    $array_reverse = array_reverse($capitals);

    echo $capitals["USA"];
    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";

    foreach($capitals as $key => $value){
        echo "{$key} => {$value}";
    }
?>