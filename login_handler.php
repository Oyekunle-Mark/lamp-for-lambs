<?php

require_once('lawspace_fns.php');

$username = $_POST['username'];
$username = format($username);
$password = $_POST['password'];
$password = format($password);

$conn = db_connect();

$sql = "SELECT username, password from user where username='".$username."' and password='".$password."'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    echo "You are logged in!";
} else {
    echo "Get away you!";
}

mysqli_close($conn);

?>