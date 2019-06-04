<?php
function connect(){
$servername = "";
$username="";
$password="";
$dbname= "";
return $conn= mysqli_connect($servername, $username, $password, $dbname);
}
?>
