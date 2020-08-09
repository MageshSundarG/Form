<?php

$dbusername= 'root';
$dbpass='';
$dbname='contact';
$con = mysqli_connect('loclhost',$dbusername,$dbpass,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
echo "";
}
?>
