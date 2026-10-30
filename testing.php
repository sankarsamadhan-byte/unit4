
  <?php

$sam =new mysqli("localhost","root","","night");


$mob=$_GET["mob"];
$sid=$_GET["sid"];
$name=$_GET["name"];
$city=$_GET["city"];

$sel ="SELECT * FROM intex WHERE mob='$mon'";

$ans =$sam ->query ($sel);

$row=mysqli_num_rows($ans);

if($row>0)
    {
        echo "moile  he   anothe  pleseee";
    }
    else
        {
            $ins="INSERT INTO intex
            VALUES ('$sid','$name','$mob','$city')";
        }

    if($sam->query($ins))
        {
            echo "yep  do   done ";
        }
        else
            {
                echo "ERRRI".$sam ->error;
            }



  ?>      