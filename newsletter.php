<html>
<body>
<?php

require_once('lawspace_fns.php');

$email = $_POST['email'];
$email = format($email);

$conn = db_connect();
  
$sql = "INSERT INTO news_letter (email) VALUES ('".$email."')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    throw new Exception('Could not execute query');
}

mysqli_close($conn); 
?>
</body>
</html>