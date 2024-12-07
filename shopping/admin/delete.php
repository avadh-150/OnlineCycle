<?php
$con=mysqli_connect('localhost','root','','shopping');
if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "delete from users where id='$id'";
    $result = mysqli_query($con, $sql) or die("Query Falied.................");
    if ($result) {
        header("location:manage-users.php");
    } else {
        echo "<h1>404</h1>";
    }
}
?>