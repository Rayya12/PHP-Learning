<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index9.php" method="post">
        <input type="checkbox" name="pizza" value="pizza">Pizza<br>
        <input type="checkbox" name="hamburger" value="hamburger">hamburger<br>
        <input type="checkbox" name="hotdog" value="hotdog">hotdog<br>
        <input type="checkbox" name="taco" value="taco">taco<br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

    if (isset($_POST["submit"])){
        if (isset($_POST["pizza"])){
            echo "You like pizza!";
        }
        if (isset($_POST["hamburger"])){
            echo "You like hamburger!";
        }
        if (isset($_POST["hotdog"])){
            echo "You like hotdog!";
        }
        if (isset($_POST["taco"])){
            echo "You like taco!";
        }
        if (empty($_POST["pizza"])){
            echo "You dont like pizza!";
        }
        if (empty($_POST["hamburger"])){
            echo "You dont like hamburger!";
        }
        if (empty($_POST["hotdog"])){
            echo "You dont like hotdog!";
        }
        if (empty($_POST["taco"])){
            echo "You dont like taco!";
        }
    }


?>