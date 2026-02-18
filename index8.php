<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index8.php" method="post">
    <!--to radio name sama input type radio-->
        <input type="radio" name="credit_card" value="Visa">Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">AMEX<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if (isset($_POST["confirm"])){

        $credit_card = null;

        if (isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
        }

        if ($credit_card == "Visa"){
            echo "You selected Visa";
        }else if ($credit_card == "Mastercard"){
            echo "You selected Mastercard";
        }else if ($credit_card == "American Express"){
            echo "You selected American Express";
        }else {
            echo "please select the credit card";
        }
        
    }else{
    }
    


?>