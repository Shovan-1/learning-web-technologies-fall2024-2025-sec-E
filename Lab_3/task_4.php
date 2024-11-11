<?php
 echo "1st number is ". $number1=25 . "<br>";
 echo "2nd number is ". $number2=30 . "<br>";
 echo "3rd number is ". $number3=35 . "<br>";

 if($number1>$number2)
 {
    if($number1>$number3)

    {
        echo "Largest no=" . $number1;
    }
 }
 elseif($number2>$number3)
 {
    echo "Largest no=" .  $number2;
 }
 else
 echo "Largest no" .  $number3;

?>