<?php

// your code goes here

$n=9;
for($i=$n; $i>0; $i--){
	for($j=1; $j<$i; $j++){
        echo "&nbsp;&nbsp;";
    }
    for($k=$n; $k>=$i; $k--){
        echo $k;
    }
    echo "<br>";
}
?>