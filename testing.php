<?php

$sam =new mysqi("localhost","roto"
);

$mob=$_GET["mob"];
sid=$_GET["sid"];
$nmae=$_GET["nmae"];

$sel ="SELECT * FROM STN where MObl ='$mob'";

$asn= $sam ->query ($sel);

$row =mysqli_row_nums($asn);
if($ro>0)
    {
        echo moile alert  he  try anothe  mio  nuebr
;    }

else
    {
        echo "NO  EXISTS  oyu  hvae  to neter
        "

        if($sid!="&&$nmae!="")
        {
        $insert="INSERt INOT stun values($id',;$nma;,'$mon');

        if($sam->query($insert)==true0
        {
        echo "DONE
else
    {
    eoro

    }

?>