<?php 

echo "hello\n";
echo $_POST["name"];




include 'connector.php';
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$carname=$_POST["carname"];
$color=$_POST["color"];
$price=$_POST["price"];



$conn=connect();


if($conn === false){
    die("\nERROR: Could not connect. " . mysqli_connect_error());
}
//name, phone,email,carname,color,price

$sql = "INSERT INTO Carads  VALUES ('$name','$phone','$email','$carname','$color','$price')";

if (mysqli_query($conn, $sql)) {
    echo "\nNew record created successfully";
} else {
    echo "\nError: " . $sql . "<br>" . mysqli_error($conn);
}





mysqli_close($conn);


	
?>

