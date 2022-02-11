<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignement 4</title>
</head>
<body>
        <h2>Task 1</h2>

<?php
    $courses= array('PHP', 'HTML', 'JavaScript', 'CMS', 'Project');
     foreach($courses as $x)
     echo "<li>".$x."<br>";
?>
        <h2>Task 2</h2>
<?php
     $courses2=array("PHP","HTML", "JavaScript", "CMS","Project");
     unset($courses2[5]);
       foreach ($courses2 as $y){
          echo $y ."<br>";
       }
?>
        <h2>Task 3</h2>
        <h3>a .</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     sort($courses3);
        foreach ($courses3 as $z)
        echo $z."<br>";
?>
        <h3>b .</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     ksort($courses3);
        foreach ($courses3 as $a)
        echo $a."<br>";
?>
            <h3>c .</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     rsort($courses3);
        foreach ($courses3 as $b)
        echo $b."<br>";
    
?>
            <h3>d .</h3>
<?php
    $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
     krsort($courses3);
     foreach ($courses3 as $c)
        echo $c."<br>";
?>
            <h2>Task 4</h2>
<?php
    $courses4=array("php", "html", "javascript", "cms", "project");
    $courses4= array_flip($courses4);    
    $courses4= array_change_key_case($courses4, CASE_UPPER);
    $courses4= array_flip($courses4);
      foreach($courses4 as $d)
      echo $d."<br>";
 ?>
            <h2>Task 5</h2>
<?php
    $colors = array("green","yellow","silver");
        foreach($colors as $cl)
        echo $cl."<br>";
?>
            <h2>Task 6</h2>
<?php
     $colors = array("green" =>"#008000","yellow"=>"#FFFF00","silver"=>"#C0C0C0");
        foreach($colors as $co => $hex)
        echo "color: ".$co."  || hex: ".$hex."<br>";
?>










</body>
</html>