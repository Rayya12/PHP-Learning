<?php 
    // $_SERVER SGB yang ada header, path, dan lokasi script
    // created by web server, show everything needed about current web page env

    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value}";
    }
?>