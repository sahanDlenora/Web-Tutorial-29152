<html >
<body>
    <?php 
    
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $un=$_POST['UserName'];
    $ps=$_POST['pass_word'];
    $gn=$_POST["gender"];
    $yr= $_POST["year"];   
    $em=$_POST["email"];
    $pn=$_POST["phone"];
    
    ?>
    
    <table border="1">
        <tr>
            <th>First Name</th>
            <td><?php echo "$fn"; ?></td>
        </tr>
        <tr>
            <th>Last Name</th>
            <td><?php echo "$ln"; ?></td>
        </tr>
        <tr>
            <th>UserName</th>
            <td><?php echo "$un"; ?></td>
        </tr>
        <tr>
            <th>password</th>
            <td><?php echo "$ps"; ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>
                <?php
                    echo "$gn"; 
                    
                ?>
            </td>
        </tr>
        <tr>
            <th>Acedemic Year</th>
            <td><?php echo "$yr"; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo "$em"; ?></td>
        </tr>
        <tr>
            <th>Phone No</th>
            <td><?php echo "$pn"; ?></td>
        </tr>
        
    </table>
</body>
</html>
