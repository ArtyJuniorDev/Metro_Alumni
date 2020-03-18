<?php 
  include 'connect.php';

  $stid = mysqli_real_escape_string($connection, $_GET['stid']);

  if ($stid == null) {
    header("location: miss.php");
  }
 
  $query = "SELECT * FROM tblstudentpvc WHERE stid = '$stid' ORDER BY stid ASC";
  $query_run = mysqli_query($connection, $query);
  $row = mysqli_fetch_row($query_run);

  if ($row == null) {
    $query_special = "SELECT * FROM tblstudentpvs WHERE stid = '$stid' ORDER BY stid ASC";
    $query_run = mysqli_query($connection, $query_special);
    $row = mysqli_fetch_row($query_run);
  }

  if ($row == null) {
    $query_special = "SELECT * FROM tblstudentpvss WHERE stid = '$stid' ORDER BY stid ASC";
    $query_run = mysqli_query($connection, $query_special);
    $row = mysqli_fetch_row($query_run);
  }

  if ($row == null) {
    header("location: miss.php");
  }

  $version = $row[22];
  switch ($version) {
    case $version == 2554: $version = 'ทศวรรษ'; break;
    case $version == 2555: $version = 'พิทวัส 11'; break;
    case $version == 2556: $version = 'เอกนักษัตริย์'; break;
    case $version == 2557: $version = 'ปราชปฏิพัทธ์'; break;
  }

  $year = $row[22];
  switch ($year) {
    case $year == 2554: $year = '2554'; break;
    case $year == 2555: $year = '2555'; break;
    case $year == 2556: $year = '2556'; break;
    case $year == 2557: $year = '2557'; break;
    }


  $str_sub = trim($row[1])." ";
  $birth_day = substr($row[6], 8);
  $birth_month = substr($row[6], 6, 1);
  $birth_years = substr($row[6], 0, 4);

  switch ($birth_month) {
    case $birth_month == 1: $birth_month = 'มกราคม'; break;
    case $birth_month == 2: $birth_month = 'กุมพาพันธ์'; break;
    case $birth_month == 3: $birth_month = 'มีนาคม'; break;
    case $birth_month == 4: $birth_month = 'เมษายน'; break;
    case $birth_month == 5: $birth_month = 'พฤษภาคม'; break;
    case $birth_month == 6: $birth_month = 'มิถุนายน'; break;
    case $birth_month == 7: $birth_month = 'กรกฎาคม'; break;
    case $birth_month == 8: $birth_month = 'สิงหาคม'; break;
    case $birth_month == 9: $birth_month = 'กันยายน'; break;
    case $birth_month == 10: $birth_month = 'ตุลาคม'; break;
    case $birth_month == 11: $birth_month = 'พฤศจิกายน'; break;
    case $birth_month == 12: $birth_month = 'ธันวาคม'; break;
}



$years_int = (int)$birth_years;
$year_thai = $years_int + 543;
$address = $row[7]." ".$row[8]." ".$row[9]." ".$row[10]." ".$row[11]." ".$row[12]." ".$row[13];
$tel = $row[14];
$email = $row[26];

if ($email == null) {
  $email = " - ";
}


?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Metro Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="A new design system for developing with less effort.">
    <meta name="author" content="BootstrapBay">

    <link href="assets/img/cmt-icon.png" rel="icon" type="image/png">
    
    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/lazy.css">
		<link rel="stylesheet" href="./assets/css/demo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="index bg-info">
      <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        
      <div class="container">
        <a class="navbar-brand" href="./"><img src="assets/img/cmt-icon.png" alt="Example Navbar 1" class="mr-2" height="60"> Metro Alumni </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
	        <ul class="navbar-nav">
            <li class="nav-item dropdown mx-2">
            <a class="nav-link" href="index.php" id="nav-inner-primary_dropdown_1">Home</a>

            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8  offset-lg-2 text-center mb-2">
	          <div class="title">
	            <h3 class="display-2 text-white"> รุ่น <?php echo $version ?></h3>
	            <h4 class="text-white mt-3">ระดับชั้นประกาศนียบัตรวิชาชีพ ปีการศึกษา <?php echo $year ?></h4>
            </div>
        </div>
      </div>
    </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mr-auto ml-auto">
          <div class="component">
            <div class="card">
                <div class="card-header mr-auto ml-auto">
                  <div class="img-fluid">
                    <img class="round" src="http://www.metro.ac.th/metroalumni/picalumnae/<?php echo $stid ?>.jpg" alt="picture" width="200px" height="200px">
                  </div>
                </div>
                <div class="card-body">
                    <span class="badge badge-success mb-2">ประวัตินักศึกษา</span>
                <h4 class="card-title text-center"> รหัสนักศึกษา <?php echo $row[0] ?> <?php echo $row[5] ?> </h4>
                <h4 class="card-title"> <?php echo $str_sub.$row[2].$row[3] ?> </h4>
                <h4 class="card-title"> วันเกิด <?php echo $birth_day ?> เดือน <?php echo $birth_month ?> ปี <?php echo $year_thai ?></h4>
                <h4 class="card-title"> ที่อยู่ : <?php echo $address ?></h4>
                <h4 class="card-title"> เบอร์โทรศัพท์ : <?php echo $tel ?></h4>
                <h4 class="card-title"> Email : <?php echo $email ?></h4>
            </div>
        </div>
        <a class="btn btn-primary text-white mt-3 mr-auto ml-auto" href="javascript:history.back()">ย้อนกลับ</a>
        <a class="btn btn-secondary text-white mt-3 mr-auto ml-auto" href="index.php">กลับสู่หน้าหลัก</a>
    </div>

    <!-- <div class="container">
        <tr>
            <th scope="row" width="200px" class="text-center"> <?php echo $row[0] ?> </th>
            <td width="200px">  <?php echo $str_sub.$row[2].$row[3] ?> </td>
            <td class="text-center" width="100px"> <?php echo $row[4] ?></td>
            <td class="text-center" width="100px"> <?php echo $row[5] ?></td>
        </tr>
	</div> -->
            
    




        
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js" ></script>

    <!-- optional plugins -->
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="./assets/js/lazy.js"></script>
  </body>
</html>
