<html>
<body>
<?php

require_once('lawspace_fns.php');

$fname = $_POST['fname'];
$fname = format($fname);
$lname = $_POST['lname'];
$lname = format($lname);
$email = $_POST['email'];
$email = format($email);
$tel = $_POST['tel'];
$tel = format($tel);
$sex = $_POST['sex'];
$sex = format($sex);
$dob = $_POST['dob'];
$dob = format($dob);
$address = $_POST['address'];
$address = format($address);
$uname = $_POST['username'];
$uname = format($uname);
$password = $_POST['password'];
$password = format($password);

// this is an error correction attempt
$age = 20;

$conn = db_connect();

$sql = "INSERT INTO user (fname, lname, age, address, tel, email, sex, dob, username, password) VALUES ('".$fname."','".$lname."','".$age."','".$address."','".$tel."', '".$email."','".$sex."','".$dob."','".$uname."','".$password."')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    throw new Exception('Could not execute query');
}

mysqli_close($conn); 

?>
</body>
</html>