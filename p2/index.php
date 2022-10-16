
<!-- Author:   Shawn Nasseri
     Date:     October 15, 2022
     Function: Simple game of guessing numbers
             : between 1 and 20 Will say if guess is high or low
             : random number function makes the number to guess.
             : User can guess and will now if its high or low or
             : correct. This is the controller
-->

<?php
// Constant Limits
$random_min = 1;
$random_max = 20;
$rand = rand($random_min,$random_max);

$number = $_GET['num_in'];
if ($number > $rand){
     $messageHighLowCorrect =  "Your guess is high";
} elseif ($number < $rand) {
     $messageHighLowCorrect =  "Your guess is low";
} elseif ($number == $rand) {
     $messageHighLowCorrect =  "Your guess is correct";
}

require "index-view.php"
?>