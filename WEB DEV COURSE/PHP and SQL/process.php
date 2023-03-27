<?php

$connection = mysqli_connect("localhost","root","","attitude");

if(ISSET($_POST['savedata'])) {

    $uname = $_POST['name'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $address = $_POST['address'];

    // echo $uname."<br>"; exit;
    // echo $phone."<br>";
    // echo $class."<br>";
    // echo $address; 

    if($uname=="") {
        header('location:index.php?msg=namenull');
    } elseif($phone=="") {
        header('location:index.php?msg=phonenull');
    } elseif($class=="") {
        header('location:index.php?msg=classnull');
    } elseif($address=="") {
        header('location:index.php?msg=addressnull');
    } else {

        $selectquery = "select * from student where phone='".$phone."'";
        $checkquery =  mysqli_query($connection,$selectquery);
        if(mysqli_num_rows($checkquery)<1) {

            $insertsql = "insert into student set name='".$uname."',phone='".$phone."',class='".$class."',address='".$address."'";

            if(mysqli_query($connection,$insertsql)) {
                header('location:index.php?msg=ïnsert');
            } else {
                header('location:index.php?msg=not');
            }
        }
        else
        {
            header('location:index.php?msg=already');
        }
    }
}
else
{
    echo "error";
}
?>