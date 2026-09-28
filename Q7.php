<?php

$sam =trim($_GET['name']);

if($sam=="")
    {
        echo "<span style='color:red'>NOT BE  EMPTY </spna>";
    }
    else if(strlen($sam)<5)
        {
            echo "<span style='color:red'>MUST  BE  5</span>";
        }
        else
            {
                echo "<span style='color:blue'>OK PSASS</span>";
            }

?>