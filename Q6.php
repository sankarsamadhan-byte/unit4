<?php


$num=$_GET['name'];

if($num!="")
    {
        if($num%2==0)
            {
                echo"$num i  vene r";
            }
            else
                {
                    echo "$num is  odd he ";
                }

    }
    else
        echo "Enete the  numebr ";


?>