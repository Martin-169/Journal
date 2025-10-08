<?php

function sortArray($nums)
{

   for($i = 0; $i < count($nums); $i++){

        $min = $i;

        for($j = $i + 1; $j < count($nums); $j++){
            if($nums[$j] < $nums[$min]){
                $aux = $nums[$min];
                $nums[$min] = $nums[$j];
                $nums[$j] = $aux;
            }
        }
   }

   return $nums;

}

$nums = array(5, 7, 1, 9, 13, 2);

print_r(sortArray($nums));

?>