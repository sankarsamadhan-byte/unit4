<?php

$sam = new mysqli("localhost", "root", "", "collge");

$mob = $_GET["mob"];
$sid = $_GET["sid"];
$name = $_GET["name"];
$city = $_GET["city"];

$sel = "SELECT * FROM q12 WHERE mo='$mob'";

$ans = $sam->query($sel);

$row = mysqli_num_rows($ans);

if($row > 0)
{
    echo "Mobile Number Already registered. Try another Mobile Number";
}
else
{
    $insert = "INSERT INTO q12
               (stu_id, stu_name, mo, city)
               VALUES
               ('$sid', '$name', '$mob', '$city')";
}
    if($sam->query($insert))
    {
        echo "Student registered successfully";
    }
    else
    {
        echo "ERROR: " . $sam->error;
    }


$sam->close();

?>