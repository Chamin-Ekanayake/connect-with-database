<?php
//Php loging details
$servername = "Localhost";
$username = "root";
$password = "";
//database name
$database ="abc_univercity";

//connection
$conn = mysqli_connect ($servername,$username,$password,$database);

if (!$conn) {
    die ("Connection failed:". mysqli_connect_error());
}

$First_Name=mysqli_real_escape_string($conn, $_POST['First_Name']);
$Last_Name=mysqli_real_escape_string($conn, $_POST['Last_Name']);
$ID_Number=mysqli_real_escape_string($conn, $_POST['ID_Number']);
$Email=mysqli_real_escape_string($conn, $_POST['Email']);
$Telephone_Number=mysqli_real_escape_string($conn, $_POST['Telephone_Number']);
$Gender=mysqli_real_escape_string($conn, $_POST['Gender']);
$Addrese=mysqli_real_escape_string($conn, $_POST['Addrese']);


$sql="INSERT INTO ABC_University (First_Name,Last_Name,ID_Number,Email,Telephone_Number,Gender,Addrese) Values ('$First_Name','$Last_Name','$ID_Number','$Email','$Telephone_Number','$Gender','$Addrese') ";

//run sql_query command
if (mysqli_query($conn,$sql) === true) {
    echo"<script> alert('Details Added');window.location.href='index.php';</script>";

}
else {
    
    echo "Error creating database: " . $conn->error;

}

mysqli_close($conn);
?>