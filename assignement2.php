<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignement 2 -Ilyass SOUHAIL</title>
</head>
     <style>
         body
         {
            color: #17202A ;
            font-family: "Lucida Console", "Courier New", monospace;
            background: #DED4C8;
         }
         h1
         {
            background-color: cyan;
            color: magenta;
            padding-left: 42%;
            font-family: arial;
            
         }
         h2
         {
            background-color: magenta;
            color: cyan;
            padding-left: 4%;
            margin-right: 25%;
            font-family: serif;
         }
         h3
         {
            background-color: #117A65;
            color: #8FD111 ;
            padding-left: 10px;
            margin-right: 29%;
            font-family: serif;
         }

     </style>

<body>
    <div> 
       <h1>Assignement 2</h1>
         <h2>String: <br>Task 1</h2>
          <h3>Write PhP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string.</h3>

   <?php
       $string1="The first paragraphe is about the importance of knowing the syntax errors in programming basics";
       $string2= "The second paragraphe is to be fimilier with the operators and String firstly ";
        echo "$string1. $string2."."<br>";
        echo strlen("$string1. $string2.")."<br>";
     ?>
        <h2>Task 2</h2>
        <h3>In your above code, Change the double quotes to single quotes.Then run the script again. Did it have any effect?</h3>
       
   <?php
        
       $string1='we are going to count the lenght of this paragraph';
       $string2= 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, ullam';
        echo '$string1. $string2.<br>';
        echo strlen('$string1. $string2.')."<br>";
        echo "changing double quotes to one quote ignore the variable of the adress but the name of the variable"; 
     ?>
        <h2>Task 3</h2>
        <h3>Put a single quote at the beginning of your text and double quote at the end. What happens now when you run your code?</h3>
   <?php
      
        echo "it gives an error "; 
   ?>
        <h2>Task 4</h2>
        <h3>Delete the dollar sign from the variable name. Run your code. What error did you get? Write the error message?</h3>
   <?php
      
      echo "syntax error, unexpected token \"=\". ";
   ?>
        <h2>Task 5</h2>
        <h3>Put the dollar sign back and remove one of the semicolon from the code. Run your code again. What error did you get this time?</h3>
   <?php
       echo "it gives an error in the string 2 means it's necessary to add the semi colomn.";

   ?>
        <h2>Task 6</h2>
        <h3>Write a PHP script to get the following display <br> " It is Markku's car." <br> Random characters: del c:\*.* "</h3>
   <?php
       echo  " It is Markku's car.<br>";
       echo  "Random characters: del c:\. \" <br>";

   ?>
        <h2>Operators: <br>Task 1</h2>
        <h3>Write a script to add up the numbers: 298, 234, 46. Use echo statement to output your answer.</h3>
    
    <?php
       $x=298; 
       $y=234;
       $z=46;
       echo "The sum of x,y and z is : ". ($x+$y+$z) ."<br>";
   ?>
        <h2>Task 2</h2>
        <h3>Use variables to calculate the following : (87 + 44)+(200 * 15) / 10</h3>
   
   <?php
       $x=87; 
       $y=44;
       $z=200;
       $a= 15;
       $t=10;
       echo "($x + $y)+($z * $a) / $t = ".($x + $y)+($z * $a) / $t  . "<br>";
   ?>

</body>
</html>