<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Calculator</title>
</head>
<body>
<?php include("calculator.html"); #Script handle calculator
    if(isset($source)) {
        if($source == 'calculator.html'){
            if ((is_numeric($quantity))) {
                $total = ($quantity * $price) * ($taxrate +1);
                $total = number_format ($total,2);
                echo "You are purchasing <b> ".$_POST["quantity"] .
                "</b> widgets at a cost of <b> ". $_POST["price"] .
                "</b> each. With tax the total comes to <b>". $total . "</b.\n";
            }else{
                echo "<p><b>Please enter a valid quantity to purchase!</b></p>";
            }
        }else{
            echo "<p><b>You have accessed this page inappropriately!</b></p>";
        }
    }else{
        echo "<p><b>You have accessed this page inappropriately!</b></p>";
    }
?>
</body>
</html>