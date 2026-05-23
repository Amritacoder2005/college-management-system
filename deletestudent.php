<?php
$conn=mysqli_connect("localhost","root","","college");

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $del="DELETE FROM `faculty signup` WHERE sr_no='$id'";
    if(mysqli_query($conn,$del))
    {
         echo "<script>
        alert('Are you sure to delete this Record!!');
        window.location.href = 'showfaculty.php';
    </script>";
    }
    else{
        echo "Error:".$del. "<br>" .$conn->error;
    }
}
?>