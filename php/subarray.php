<?php
/* function birthday($s, $d, $m) {
    // Write your code here
    $length = 0;
    $sum = 0;
    $total = count($s);
    $bar = 0;
    
    if($sum<=$d && $length==$m){
        $bar++;
        for($i = 0; $i < $total; $i++){
            for($j = 1; $j < $total; $j++){                  
                $sum = $s[$i] + $s[$j];
            }
        }                
    }else{
        return $bar;
    }
} */




function birthday($s, $d, $m)
{
    // Write your code here
    $total = count($s);
    $bar = 0;

    for ($i = 0; $i < ($total); $i++) {
        $sum = 0;
        // echo "hello checking for the 1st \n";
        for ($j = $i; $j < ($i + $m); $j++) {
            $sum += $s[$j];
            if ($sum == $d) {
                $bar++;

                echo $sum . " entered in if \n";
            }
            echo $sum . " sdf " . $bar . "\n";
        }
    }
    return $bar;
}
