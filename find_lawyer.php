<html>
<body>
<?php

require_once('lawspace_fns.php');

$category = $_POST['category'];
$category = format($category);
$location = $_POST['location'];
$location = format($location);

$conn = db_connect();

$sql = "select fname, lname, sex, dob, p_area from lawyer_basic where p_area='".$category."' and address like '%".$location."%'";

$result = mysqli_query($conn, $sql);
    
//if(!$result) {
//    throw new Exception('Could not execute query');
//}

   
if (mysqli_num_rows($result) > 0) {
    //output data of each row
    echo mysqli_num_rows($result)." Lawyer(s) Found";
    echo '<hr />';
    while($row = mysqli_fetch_assoc($result)) {
        echo "<table class='table table-hover table-stripped'><tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>"."<a class='btn btn-success' href='./lawyer_profile.php?fname=".$row['fname']."&lname=".$row['lname']."&sex=".$row['sex']."&dob=".$row['dob']."&p_area=".$row['p_area']."'>View Profile</a>"."</td></tr></table>";
    }
} else {
    echo "No results found"."<br />";
}

mysqli_close($conn); 

?>
</body>
</html>