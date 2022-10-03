<h1>Shawn Nasseri In E2 P1 </h1>
<h1><?php echo "Start of Project" ?></h1>

<?php
$rand = rand(1,20);
for ($x = 0; $x <= 100; $x++) {
   echo " Count is: $x <br> ";
   $guess_rand = rand(1,20);
   echo " Random Guess is: $guess_rand <br> ";
   if ($guess_rand > $rand) {
       echo " guess high ";
   } elseif ($guess_rand == $rand) {
       echo " guess correct ";
   } else {
       echo " Guess low ";
}
}
?>