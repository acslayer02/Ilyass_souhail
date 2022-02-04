<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignement 1 -ilyass SOUHAIL</title>
</head>
<style>
    body
    {
        color: blue;
        font-family: verdana;
        font-size: 18px;
    }
    h1
    {
        background-color: green;
        padding-left:45%;
        color: yellow;
        font-family: arial;
    }

    h2
    {
        background-color: yellow;
        padding-left:5%;
        color: green;
        font-family: arial;
    }
    h3
    {
        background-color: #E6F4A4;
        padding-left:0,5%;
        color: red;
        font-family: georgia;
    }
    table,th,tr
    {
        border: 1.5px solid blue;
        margin-left: 42%;
    }

     
</style>
<body>
    <div>
        <h1> Assignement1 </h1>
        <p><b>ilyass souhail</b> </p>
        <h2>Task 1 </h2>
        <h3>Write a PHP script to get the PHP configuration information.</h3>
    <?php
        echo "command: phpinfo();"
        //phpinfo();
    ?>
        <h2>Task 2</h2>
        <h3>Write a simple PHP script to print your information (Name and your groupid).</h3>
    <?php
        echo "<p>My name is ILYASS.</p>";
        echo "<p>My groupid is BBCAP2020.</p>";
    ?>
        <h2>Task 3</h2>
        <h3>Write PHP code to display the following message: Hello world ! My name is "David"</h3>
    <?php
        echo "<p>Hello world ! My name is \"David\"</p>";
    ?>
        <h2>Task 4</h2>
        <h3>Write a paragraphe</h3>
    <?php
        $paragraphe = "It is possible to place variables inside of double-quoted strings (e.g. \"string here and a \$variable\"). <b>By putting a variable</b> inside the quotes (\" \") you are telling PHP that you want it to grab the string value of that variable and use it in the string.<br>The example below shows an example of this feature.";
        echo "<p>$paragraphe</p>";
    ?>
        <h2>Task 5</h2>
        <h3>Use two constants to assign your first name and last name. Print to get the following output. </h3>
    <?php 
        define("firstname","ilyass");
        define("lastname","souhail");
        $cte = 'constant';
        echo "<p>My first name is <b>{$cte('firstname')}</b> <br>My last name is <b>{$cte('lastname')}</b>";
    ?>
        <h2>Task 6</h2>
        <h3>In one of your HTML page, write the PHP code to display date. </h3>
    <?php
        echo "Today is " .date("l")." ".date("d-m-y").".";
    ?>
        <h2>Task 7</h2>
        <h3>$title = "PHP is interesting" . Put this variable as a title that is marked as h1 (heading 1) in your HTML document. </h3>
        
    <?php
        
        $title = "PHP is interesting";
        echo "<h1>$title</h1>";
    ?>
        <h2>Task 8</h2>
        <h3>$g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h3>
    <?php
        $g1=5;
        $g2=4;
        $g3=5;
        echo"
        <table>
        <tr>
            <th>S.n</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <th>1</th>
            <th>mellouli</th>
            <th>$g1</th>
        </tr>
        <tr>
            <th>2</th>
            <th>wamangituka</th>
            <th>$g2</th>
        </tr>
        <tr>
            <th>1</th>
            <th>Lord abe</th>
            <th>$g3</th>
        </tr>
        </table>"
    ?>
    </div>
    
</body>
</html>