 <?php
 
 function sum($ls)
 {
     return array_reduce($ls, function ($carry, $curr) {
         return $carry + $curr;
     }, 0);
 }
