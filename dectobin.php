<?php
// PROGRAM TO CONVERT DECIMAL NUMBER TO BINARY
 
function decToBin($n) 
{ 
     
    $binNum; 
    $k = 0; 
    while ($n > 0)  
    { 
      $binNum[$k] = $n % 2; 
        $n = (int)($n / 2); 
        $k++; 
    } 
   
    for ($j = $k - 1; $j >= 0; $j--) 
        echo  $binNum[$j]; 
} 

$n = 25; 
echo "Decimal number: ".$n."<br> Binary Number: ";
decToBin($n); 
  



?>