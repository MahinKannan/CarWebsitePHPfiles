<?php 

include 'connecter.php';
echo "Hello";
$Id=$_POST["Id"];
$Company=$_POST["Company"];
$Model=$_POST["Model"];
$Price=$_POST["Price"];
$Distance=$_POST["Distance"];
$Year=$_POST["Year"];
$Email=$_POST["Email"];
$Sid=$_POST["Sid"];
echo $Id;
echo $Company;
echo $Model;
echo $Price;
echo $Distance;
echo $Year;
echo $Email;
echo $Sid;
$conn=connect();
echo "hello1";
if($conn === false){
    die("\nERROR: Could not connect." . mysqli_connect_error());
}
//name, phone,email,carname,color,price

$sql = "INSERT INTO Cars VALUES ('$Id','$Company','$Model','$Price','$Distance','$Year','$Email','$Sid')";
//echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "\nNew record created successfully";
} else {
    echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
	
?>