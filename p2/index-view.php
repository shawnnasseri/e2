
<!-- Author:   Shawn Nasseri
     Date:     October 15, 2022
     Function: Simple game of guessing numbers
             : between 1 and 20 Will say if guess is high or low
             : Random number function with user input view
             : Refactor ***
-->

<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="styles.css">
</head>

<body>  
    <h1>Shawn Nasseri E2 P2 </h1>
    <h1>Start of Project Two Guess number 1 to 20</h1>
    <h2>Random Number is: </h2>
    <h2><?=$rand?></h2>

    <form action="" method="GET">
      <label for="num_in">Enter your guess</label>
      <input type="text" name="num_in">
      <input type="submit" name="submit" value="Guess">
    </form>
    <h2>Message</h2>
    <h2><?=$messageHighLowCorrect?></h2>
</body>
</html>