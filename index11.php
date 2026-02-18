<?php

    $username = "Bro Code";
    $username = strtolower($username);
    $username = strtoupper($username);
    $username = trim($username);
    $username = str_pad($username,20,"0",STR_PAD_BOTH);
    $username = strrev($username);
    $username = str_shuffle($username);
    $username = str_replace("a","b",$username);
    $equals = strcmp($username,"Aku ganteng");
    $length = strlen($username); # panjang
    $index = strpos($username,"u"); # mencari index u
    $subku = substr($username,4);
    $subku = substr($username,0,3); # parsing

    $username = "Ray The Grade"; # unstuk split
    $fullname = explode(" ",$username);

    $username = implode(" ",array("Roman","The Great","Mantab"));



?>
