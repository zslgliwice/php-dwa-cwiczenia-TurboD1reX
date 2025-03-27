<?php
if (isset($_POST['amount'])) {
    $amount = (int)$_POST['amount'];
    $name = $_POST['name'];
    $subject = $_POST['select'];
    $notes = isset($_POST['checkbox']);
    $koszt =['50'=> 50,'60'=> 60,'45'=> 45];
    if ($amount < 1) {
        echo "Liczba lekcji must be > 0";
    } else {
        $cost = $amount * $koszt[$subject];
        if ($notes) {
            $cost += $amount * 5;
        }
        echo "$name, koszt Twojego zamówienia to $cost zł";
    }
    }
?>

 
 