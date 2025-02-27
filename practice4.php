<?php 
if ($_POST) { 
    $num = $_POST["usernum"]; 
    for ($x = 1; $x <= $num; $x++)
    { 
        for ($y = 1; $y <= $num; $y++)
        { 
            echo "$x*$y = " . $x * $y . "<br>"; 
        }
    } 
} 
?>