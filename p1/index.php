
<!-- Author:   Shawn Nasseri
     Date:     October 4, 2022
     Function: Simple game of guessing numbers
             : between 1 and 20 Will say if guess is high or low
             : Two random number functions. This is the controller
-->

<?php
$rand = rand(1,20);
for ($x = 0; $x <= 100; $x++) {
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