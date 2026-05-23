<?php

if($_POST['Submit']){


$conn=mysqli_connect("localhost","root","","college");

$a=$_POST['Email'];
$b=$_POST['Password'];

$sel="SELECT * FROM `signup` WHERE Email='$a' or Password='$b'";

$r=mysqli_query($conn,$sel);

$res=mysqli_fetch_array($r,MYSQLI_BOTH);

$email=$res['Email'];
$password=$res['Password'];

if($password==$b)
{
    if($email==$a)
    {
        $_SESSION['user']=$a;
        header("location:studentdashboard.php");
    }
    else{
        echo "email is not match";
    }
}
else{
    echo "password is not match";
}
}
?>