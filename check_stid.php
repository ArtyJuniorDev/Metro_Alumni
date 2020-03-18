<?php
    include 'connect.php';
    $stid = $_GET['stid'];

    $query = "SELECT * FROM tblstudentpvc WHERE stid = '$stid' ORDER BY stid ASC";
    $query_run = mysqli_query($connection, $query);
    $row = mysqli_fetch_row($query_run);
    $url = "stid=".$row[0]."&fname".$row[1]."&name".$row[2]."&lname".$row[3]."&nickname".$row[4]."&stclass".$row[5]."&birthday".$row[6]."&address".$row[7]."&moo".$row[8]
    ."&road_name".$row[9]."&tumbol".$row[10]."&ampher".$row[11]."&province".$row[12]."&post".$row[13]."&tel".$row[14]."&version".$row[22]."&email".$row[26];
    header("location: showDetail.php?$url");

    if ($stid == null) {
        header("location: miss.php");
    }

    if ($row == null) {
        $query = "SELECT * FROM tblstudentpvs WHERE stid = '$stid' ORDER BY stid ASC";
        $query_run = mysqli_query($connection, $query);
        $row = mysqli_fetch_row($query_run);
        $url = "stid=".$row[0]."&fname".$row[1]."&name".$row[2]."&lname".$row[3]."&nickname".$row[4]."&stclass".$row[5]."&birthday".$row[6]."&address".$row[7]."&moo".$row[8]
        ."&road_name".$row[9]."&tumbol".$row[10]."&ampher".$row[11]."&province".$row[12]."&post".$row[13]."&tel".$row[14]."&version".$row[22]."&email".$row[26];
        header("location: showDetail.php?$url");
        echo "True";
    } 
    if ($row == null) {
        $query = "SELECT * FROM tblstudentpvss WHERE stid = '$stid' ORDER BY stid ASC";
        $query_run = mysqli_query($connection, $query);
        $row = mysqli_fetch_row($query_run);
        $url = "stid=".$row[0]."&fname".$row[1]."&name".$row[2]."&lname".$row[3]."&nickname".$row[4]."&stclass".$row[5]."&birthday".$row[6]."&address".$row[7]."&moo".$row[8]
        ."&road_name".$row[9]."&tumbol".$row[10]."&ampher".$row[11]."&province".$row[12]."&post".$row[13]."&tel".$row[14]."&version".$row[22]."&email".$row[26];
        header("location: showDetail.php?$url");
    } 
    
    if ($row == null) {
        header("location: miss.php");
    }
?>