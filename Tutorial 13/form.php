<?php


$server="localhost";
$uname="root";
$password="";
$dbname="university";

$co= new mysqli($server,$uname,$password,$dbname);

if ($co->connect_error) {
  die("Connection failed: " . $co->connect_error);
}

$id=$_POST['id'];
$name=$_POST['n'];
$email=$_POST['em'];
$ps=$_POST['ps'];

$sql="INSERT INTO students(Id,Name,Email,Password)
VALUES('".$id."','".$name."','".$email."','".$ps."')";

if($co->query($sql) === TRUE){
echo "New record created sucsessfuly";
}

else
{
echo"Error";
}

?>