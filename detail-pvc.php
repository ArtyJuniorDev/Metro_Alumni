<?php 
    include 'connect.php';
    $stid = mysqli_real_escape_string($connection, $_GET['stid']);
    echo $stid;
    
    $query = "SELECT * FROM tblstudentpvc WHERE version = '$stid' ORDER BY stid ASC";
    $query_run = mysqli_query($connection, $query);
?>