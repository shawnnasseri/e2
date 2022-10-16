
<!-- Author:   Shawn Nasseri
     Date:     October 4, 2022
     Function: Simple game of guessing numbers
             : between 1 and 20 Will say if guess is high or low
             : Two random number functions
-->
require 'controller.php'
<h1>Shawn Nasseri E2 P1 </h1>
<h1> <?php echo "Start of Project One"?> </h1>

<?php
$rand = rand(1,20);
for ($x = 0; $x <= 100; $x++) {
   echo " Count is: $x <br> ";
   $guess_rand = rand(1,20);
   echo "<span style='color:magenta;'>Target number is: $rand </span<br> ";
   echo "</br>";
   echo "<span style='color:brown;'> Random Guess is: $guess_rand </span><br> ";
   if ($guess_rand > $rand) {
       echo "<span style='color:red;'> guess high </span>";
   } elseif ($guess_rand == $rand) {
       echo "<span style='color:black,Strong;'> ------------correct guess--------- </span>";
   } else {
       echo "<span style='color:green;'> guess low </span>";
}
}
?>