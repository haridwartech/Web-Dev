<?php
$connection = mysqli_connect("localhost","root","","attitude");
$id=$_GET['id'];
$select = mysqli_query($connection,"select * from student where id='".$id."'");
if($select) {
    $delete_record = mysqli_query($connection,"delete from student where id='".$id."'");
    if($delete_record) {
        header('location:table.php?msg=deleted');
    } else {
        header('location:table.php?msg=error');
    }
} else {
    header('location:table.php?msg=notfound');
}
?>