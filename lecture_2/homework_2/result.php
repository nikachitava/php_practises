<?php 
    $arr = array();
    for($i = 0; $i < 12; $i++) {
        array_push($arr, rand(10, 100));
    }
    $number = $_POST['number'];
    $more = 0;
    $less = 0;

    foreach($arr as $value) {
        if($value > $number) {
            $more++;
        } else {
            $less ++;
        }
    }
    print_r($arr);
    echo "<p>Your number: $number</p>"; 
    echo "<p>More: $more</p>"; 
    echo "<p>Less: $less</p>"; 
?>