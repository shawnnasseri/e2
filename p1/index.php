<h1>Shawn Nasseri In E2 P1 </h1>
<h1><?php echo "Start of Project" ?></h1>

<?php

$number= $_POST['number_in'];

$submitbutton= $_POST['submit'];

$randomnumber= mt_rand(1,20);

?>
<form action="" method="POST">
Guess A number between 1 and 20: 
<input type="text" name="number_in" value=''/> <br><br>

Number In: 
<?php 
if ($submitbutton){

if (($number > 0) && ($number <=20)){
if ($number != $randomnumber)
{
echo "Incorrect. Number was $randomnumber. Try again";
}
else 
{
echo "$randomnumber correct.";
}
}

}
?>
<br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>