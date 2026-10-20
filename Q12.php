<?php

$name=new mysqli("localhost","root","","collge");

echo "<br>CONNCET";

$id=$_GET["name"];

$sle="SELECT*FROM q12 WHERE stu_id=$id";
$ans=$name -> query($sle);

$row=mysqli_num_rows($ans);

if($row>0)
    {
        echo "STUN $id he  bhi ";
    }
    else
        {
            echo "$id  nahe he ";
        }

        $name->close();

?>