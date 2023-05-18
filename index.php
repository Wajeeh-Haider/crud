<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>
<body>
<?php include_once 'db.php'; ?>


    <h1>Welcome
            <?php if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
            } ?>

</h1>

    <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="email" placeholder="email">
        <input type="submit" name="submit">
    </form>


<ul>
<?php
$sql = 'SELECT * FROM user ';
$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<li>$row[id] | $row[name] | $row[address] | $row[email] | 
        <a href='delete.php?hello=$row[id]'>Delete </a> ||
        <a href='edit.php?id=$row[id]'>Edit </a>
        </li>";
    }
} else {
    echo 'No result found';
}
?>
</ul>


<a href="logout.php">Logout</a>


    
</body>
</html>