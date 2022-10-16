
<!-- Author:   Shawn Nasseri
     Date:     October 4, 2022
     Function: Simple game of guessing numbers
             : between 1 and 20 Will say if guess is high or low
             : Two random number functions. This is the controller
             : Refactor
-->

<?php
// Constant Limits
$random_min = 1
$random_max = 20
$tries = 100

$rand = rand($random_min,$random_max);
for ($x = 0; $x <= $tries; $x++) {
   $guess_rand = rand(1,20);
   if ($guess_rand > $rand) {
       $guess_code = 'guess high';
   } elseif ($guess_rand < $rand) {
       $guess_code = 'guess low';
   } else {
       $guess_code = 'correct guess';
       break;
}
}
require "index-view.php"
?>