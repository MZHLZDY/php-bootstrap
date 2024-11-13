<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<body>
    <h1> Update Data </h1>
    <?php
    include 'koneksi.php';
    $query = mysqli_query($connect, "SELECT * FROM data");
    while ($data = mysqli_fetch_array($query)) {
        ?>

        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
            <input type="text" name="project_n" value="<?php echo $data['project_n'];?>">
            <input type="text" name="descrip_add" value="<?php echo $data['descrip_add'];?>">
            <button type="submit" name="update"> Update </button>
        </form> <?php } ?>
</body>