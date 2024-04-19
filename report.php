<?php
include "dbcon.php";
$queryAdd = 'Insert into tblreport (rname, email, des) Values("'.$_POST["txtname"].'", "'.$_POST["txtemail"].'", "'.$_POST["txtdes"].'")';
if (mysqli_query($conn, $queryAdd)){
    echo '<h1 style="width: 500px;margin:10rem auto auto; color:green;">Data Report Successfully!</h1><a style="text-align: center;" href="Contactus.php">Return</a>';
}else{
    echo '<h1 style="width: 500px;margin:10rem auto; color:red;>Error</h1><a style="text-align: center;" href="Contactus.php">Return</a>';
}
?>