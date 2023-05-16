<?php include_once 'db.php';

$id = $_GET['hello'];

$sql = "DELETE FROM `user` WHERE id = '$id'";

$query = mysqli_query($con, $sql);

if ($query) {
    header('location:index.php');
}
?>


