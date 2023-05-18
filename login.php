<h1>Database <?php
session_start();

if (isset($_SESSION['name'])) {
    header('location: index.php');
}

include_once 'db.php';
?></h1>


<?php
$emailError = '';
$NameError = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM user WHERE name='$name' AND email='$email'";
    $query = mysqli_query($con, $sql);

    if (empty($email) || empty($name)) {
        $emailError = 'Enter your email';
        $NameError = 'Enter Your Name';
    } else {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
            }

            header('location:index.php');
        } else {
            echo 'No result found';
        }
    }
}
?>
<form action="login.php" method="POST">
    <input type="text" name="name" placeholder="name">

    <input type="text" name="email" placeholder="email">
    <?php echo $emailError; ?>
    <input type="submit" name="submit">
</form>



