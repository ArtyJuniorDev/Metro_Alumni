<?php
 include 'connect.php';

 $stid = $_POST['stid'];
 $stclass = $_POST['stclass'];
 $pname = $_POST['pname'];
 $name = $_POST['name'];
 $lname = $_POST['lname'];
 $nickname = $_POST['nickname'];
 $stclass = $_POST['stclass'];
 $birthdate = $_POST['birthdate'];
 $address = $_POST['address'];
 $tel = $_POST['tel'];

 $query = "UPDATE tbl_allforone SET pname = '$pname', name = '$name', lname = '$lname', nickname = '$nickname', stclass = '$stclass', birthdate = '$birthdate', address = '$address', tel = '$tel' WHERE stid = '$stid'";

 $query_run = mysqli_query($connection, $query);

 if (mysqli_affected_rows($connection) > 0) {
    header("Location: saveSuccess.php");
 } else {
    header("Location: saveFailed.php");
 }





?>