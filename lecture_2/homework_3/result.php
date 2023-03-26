<?php 
    $number = $_POST['inputNumber'];
    $numbers = $_POST['numbers'];
    $sum = 0;
    $multiply = 1;
    $average = 0;
   
    for($i = 0; $i < count($numbers); $i++) {
        $sum += $numbers[$i];
        if(($numbers[$i] % $number) == 0) {
            echo "<p>ჯერადი:". "$numbers[$i]". "</p>";
        }
    }
    $average = $sum / count($numbers);
    echo "<p>ჯამი: ". "$sum". "</p>";
    echo "<p>ნამრავლი: ". "$multiply". "</p>";
    echo "<p>საშუალო არითმეტიკული: ". "$average". "</p>";
?>