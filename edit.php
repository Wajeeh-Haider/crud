
<?php
include_once 'db.php';
$id = $_GET['id'];

$sql = "SELECT * from user WHERE id = '$id'";
$query = mysqli_query($con, $sql);
?>


<?php while ($row = mysqli_fetch_assoc($query)) { ?>
<form action="update.php" method="POST">
        <input type="text" value='<?php echo $row[
            'name'
        ]; ?>' name="name" placeholder="name">
        <input type="text" name="address" placeholder="address" value='<?php echo $row[
            'address'
        ]; ?>'>
        <input type="text" name="email" placeholder="email" value='<?php echo $row[
            'email'
        ]; ?>'>
         <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
        <input type="submit" name="submit">
</form>
<?php } ?>

