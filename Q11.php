<?php

$name=$_GET["name"];
if($name=="")
    {
        echo "<span style='color:red'>NOT BE  EMPTY</span>";
    }
else if($name>50)
    {
        echo "<span style='color:green'>NUMEBR is getr  the </span>";

    }
    else
        {
            echo "<span style='color:red'>Numer s  in  not getr   50 </spna>";
        }


?>