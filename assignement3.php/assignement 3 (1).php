<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voter</title>
</head>
<style>
    body{
        background-size: 100%;
        padding-left: 50px;
        color: green;
        font-size: 50px;
    }
    
</style>
<body>
    <?php
    echo "Bienvenue du maroc ".$_POST["Name"]."<br>";
    $_POST["Age"];
    if($_POST["Age"]>=18){
        echo "Your eligible to vote.";
    }else{
        echo "You cannot vote.";    
    }
?>
</body>
</html>

