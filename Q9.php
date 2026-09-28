<?php

$name=trim($_GET["name"]);
if($name=="")
    {
        echo "<span style='color:red'>NO BE  EMPTY</span>";
    }
    else if(strlen($name)<7)
        {
            echo "<span style='color:'red'>MUST BE 7</span>";

        }
        else if(strlen($name)>15)
            {
                echo "<span style='color:red'>mamaim  15</span>";

            }
            else
                {
                       echo  "<span style='color:green'>PASS</span>";
                }
?>