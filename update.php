<?php

include_once 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql2 = "UPDATE `user` SET `name`='$name',`address`='$address',`email`='$email' WHERE id = '$id'";
    $query2 = mysqli_query($con, $sql2);

    if ($query2) {
        header('location: index.php');
    } else {
        echo 'Data cannot be inserted';
    }
}
?>
