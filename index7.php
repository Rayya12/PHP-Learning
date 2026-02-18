<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index7.php">
        <label for="username"></label>
        <input type="text" name="username">

        <label for="password"></label>
        <input type="password" name="password">

        <input type="submit" value="login">
    </form>
</body>
</html>




<?php 

    $username = null;

    echo isset($username); // true if variable set and not null
    echo empty($mantab); // true if not delared, null, false, ""


?>