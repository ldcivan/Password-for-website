<?php
    if($_COOKIE["passport"] == "by9X45eN7UMI0o75CR9t65eX7cvB88C98ny74bU8C74Xw577N9j"){
        //echo ("Checkpoint 1 Pass<br>");
        if($_COOKIE["type"] == "0"){
            //echo ("Checkpoint 2 Pass (Code:0)<br>");
            $delete = 2;
        }
        elseif ($_COOKIE["type"] == "x3X43W547897bM89I54c656drS6f5C6ju7v678f64bynUn8ONU98p") {
            //echo ("Checkpoint 2 Pass<br>");
            $delete = 0;
        }
        else{
            //echo ("Checkpoint 2 Failed<br>");
            $delete = 1;
        }
    }
    else{
        //echo ("Checkpoint 1 Failed<br>");
            $delete = 1;
    }
    
    
    if($delete == 1){
        echo ("window.open('/passport/passgive.php', '_self');");
    }
    elseif($delete == 2){
        echo ("window.open('/building.php', '_self');");
    }
?>