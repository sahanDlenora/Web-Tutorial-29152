<html >
<body>
    <?php 
    
    
$server="localhost";
$uname="root";
$password="";
$dbname="university";

$co= new mysqli($server,$uname,$password,$dbname);

if ($co->connect_error) {
  die("Connection failed: " . $co->connect_error);
}
    
   
$sql = "SELECT * FROM students";

if($co->query($sql) === TRUE){
if ($result->num_rows > 0) {
    echo "<table border="1">";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "</tr>";
    while($row = $result->fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["ID"]."</td>";
        echo "<td>". $row["Name"]."</td>";
        echo "<td>". $row["Email"]."</td>";
        echo "<td>". $row["Password"]."</td>";
        echo "<tr>";
    }
    echo "</table>"; 
} 
    
else {
    
echo "No Recodes Found";
}
}
$co->close();
    ?>
</body>
</html>
