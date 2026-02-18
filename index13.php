<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>

        username:<br>
        <input type="text" name="email"><br>

        Age:<br>
        <input type="text" name="age"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>


<?php 

    if (isset($_POST["login"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}";

        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
        echo "Your email are {$email}";

        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        if (empty($age)){
            echo "That Number wasn't valid";
        }else{
            echo "Your age is {$age}";
        }
    }

    // SANITIZE itu menghilangkan character yang tidak valid
    // Validate itu akan mengecek apakah valid atau tidak, kalau tidak akan return string kosong jadi bisa pake empty


?>