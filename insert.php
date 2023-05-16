<?php

include_once 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sql2 = "INSERT INTO user(name , address, email) VALUES('$name' , '$address' , '$email')";
    $query2 = mysqli_query($con, $sql2);

    if ($query2) {
        header('location: index.php');
    } else {
        echo 'Data cannot be inserted';
    }
}
?>
