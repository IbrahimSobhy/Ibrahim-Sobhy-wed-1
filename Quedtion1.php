<?php


//Q1

$nums=[10,20,41,1,87,5,14,6,1000,-2,-5,500];
$min=$nums[0];
$max=$nums[1];
for ($i=0; $i <count($nums) ; $i++) { 

// to get min value from array
    if($nums[$i]< $min)
    {
        $min=$nums[$i];
    }
// to get max value from array
if($nums[$i]> $max)
    {
        $max=$nums[$i];
    }
   
}
echo "min = $min <br>  max= $max " ;

?>





