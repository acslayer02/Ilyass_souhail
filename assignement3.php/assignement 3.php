<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignement 3</title>
</head>

<style>
     body
         {
            color: #17202A ;
            font-family: "Lucida Console", "Courier New", monospace;
            
         }
         h1
         {
            background-color: #ABEBC6;
            color: red;
            padding-left: 42%;
            font-family: arial;
            
         }
         h2
         {
            color: green;
            padding-left: 4%;
            margin-right: 25%;
            font-family: serif;
            background:pink;
         }
         h3
         {
           
            color: white;
            padding-left: 10px;
            margin-right: 29%;
            font-family: serif;
            background: gold;
         }

     
</style>
<body>
<h1> Assignement 3 </h1>
        <h2>Task 1 </h2>
        <h3>Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:<br>It's August, so it's still holiday.<br>Not August, This is Month-name so i don't have any holidays<br>You can use date(F) function to get the current month name</h3>
<?php
$m=date("F");
if ($m=="August"){
echo "It's August, so it's still holiday.<br>";
}
else{
echo "Not August, This is $m so i don't have any holidays.<br>";
}
?>
        <h2>Task 2</h2>
        <h3>Assign color red to a variable name $color and check to print one the following responses using if else statement <br>The color is red. <br>The color is not red.</h3>
<?php
$color="red";
if($color=="red"){
echo "The color is red.<br>";
}
else{
echo"The color is not red.<br>";
}
?>
        <h2>Task 3</h2>
        <h3>Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail less then 50. </h3>
<?php
$grade=96;
if($grade>80){
echo "Excelent.<br>";
}
elseif( $grade>70){
echo "Great.<br>";
}
elseif( $grade>60){
echo "Good.<br>";
}
elseif( $grade>50){
echo "Pass.<br>";
}
elseif( $grade<50){
echo "Fail.<br>";
}
?>
        
        <h2>Task 4</h2>
        <h3>Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h3>

<form action="assignement 3 (1).php" method="post">
    Name: <input type="text" name="Name"><br>
    Age: <input type="number" name="Age"><br>
    <input type="submit">
</form>
        <h2>Task 5</h2>
<?php
    $b=9;
    while($b>1){
        for($a=1;$a<$b;$a++){
            echo "$a";
        }
        echo "<br>";
        $b--;
    }
?>
        <h2>Task 5</h2>
<?php
    $b=1;
    do{
        for($a=0;$a<$b;$a++){
            echo "*";
        }
        echo "<br>";
        $b++;
    }while($b<9)
?>
</body>
</html>