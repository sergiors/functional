 <?php
 
 function sum($ls)
 {
     return array_reduce($ls, function ($carry, $item) {
         return $carry + $item;
     }, 0);
 }
