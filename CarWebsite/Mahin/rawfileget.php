<?php

include 'connector.php';
$conn=connect();
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$carname=$_POST["getname"];
$sql = "SELECT * FROM Carads where carname='".$carname."'";
$result = mysqli_query($conn, $sql);
echo $sql;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " - Name of seller: " . $row["name"]. "<br> "."Phone:" . $row["phone"]. "<br>"."Email:" . $row["email"]. "<br>"."carname:" . $row["carname"]. "<br>"."color:" . $row["color"]. "<br>"."Price:" . $row["price"]. "<br><br><br><br><br>";
    }
} else {
   echo "0 results";
}
?>