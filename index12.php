<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="x">
            x:
        </label>
        <input type="text" name="x">

         <label for="y">
            y:
        </label>
        <input type="text" name="y">

        <label for="z">
            z:
        </label>
        <input type="text" name="z">

        <label for="radius">
            radius:
        </label>
        <input type="text" name="radius">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $radius = $_POST["radius"];
    $total = null;

    $total = abs($x);
    $total = round($x);
    $total = floor($x);
    $total = ceil($x);
    $total = pow($x,$y);
    $total = sqrt($x);
    $total = max($x,$y,$z);
    $total = min($x,$y,$y);
    $total = pi();
    $total = rand();
    $total = rand(1,6);

    $volume = null;
    $circumference = null;
    $area = null;
    
    $volume = 4/3 * pi() * $radius ** 3;
    $circumference = round(2*pi()*$radius,2);
    $area = pi() * pow($radius,2);
    echo "Volume = {$volume}";
    echo "circumference = {$circumference}";
    echo "area = {$area}";

?>