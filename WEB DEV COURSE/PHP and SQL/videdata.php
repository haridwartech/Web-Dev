<?php
    $connection = mysqli_connect("localhost","root","","attitude");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<center>
    <table border="1px solid;">
        <thead>
            <tr>
                <th>S. No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Class</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $count=1;
                $selectquery = "select * from student where id='".$_GET['id']."' order by id desc limit 5";
                $checkquery =  mysqli_query($connection,$selectquery);
                if(mysqli_num_rows($checkquery)<1) {
                    echo "No data found";
                } else {
                    while($result = mysqli_fetch_array($checkquery)) {
            ?>
            <tr>
                <td><?php echo $count++ ?></td>
                <td><?php echo $result['name']; ?></td>
                <td><?php echo $result['phone']; ?></td>
                <td><?php echo $result['class']; ?></td>
                <td><?php echo $result['address']; ?></td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</center>
</body>
</html>