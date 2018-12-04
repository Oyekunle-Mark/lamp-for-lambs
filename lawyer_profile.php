<html>
<body>
<?php

require_once('lawspace_fns.php');
    
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$sex=$_GET['sex'];
$dob=$_GET['dob'];
$p_area=$_GET['p_area'];
    
echo "<table class='table table-hover'><tr><td>First Name</td><td>".$fname."</td></tr><tr><td>Last Name</td><td>".$lname."</td></tr><tr><td>Sex</td><td>".$sex."</td></tr><tr><td>Date of Birth</td><td>".$dob."</td></tr><tr><td>Practice Area</td><td>".$p_area."</td></tr>";
    
    
$conn = db_connect();
    
$sql = "select address, tel, email from lawyer_basic where fname='".$fname."' and lname='".$lname."'"; 
    
$result = mysqli_query($conn, $sql);
    
$row = mysqli_fetch_assoc($result);
 
echo "<a id='connectButton' class='btn btn-info' href='#'>Connect</a>";

echo  "<table id='hiddenTable' class='table table-hover'><tr><td>Address</td><td>".$row['address']."</td></tr><tr><td>Telephone</td><td>".$row['tel']."</td></tr><tr><td>Email</td><td>".$row['email']."</td></tr></table>"
    
?>
 
</body>
</html>