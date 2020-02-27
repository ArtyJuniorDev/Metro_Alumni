<?php 
    include 'connect.php';
    $version_name = mysqli_real_escape_string($connection, $_GET['version']);
    $version = mysqli_real_escape_string($connection, $_GET['version']);
    $year = mysqli_real_escape_string($connection, $_GET['year']);

    switch ($year) {
        case $year == 2554:  $version = '2554'; break;
        case $year == 2555:  $version = '2555'; break;
        case $year == 2556:  $version = '2556'; break;
        case $year == 2557:  $version = '2557'; break;
    }

    
    $query = "SELECT * FROM tblstudentpvc WHERE version = '$version' ORDER BY stid ASC";
    $query_run = mysqli_query($connection, $query);
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
              <a class="nav-link" href="#" id="nav-inner-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-primary_dropdown_1">
                <a class="dropdown-item" href="documentation/getting_started.html" target="_blank">Getting Started</a>
                <a class="dropdown-item" href="documentation/alerts.html" target="_blank">Core Elements</a>
                
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8  offset-lg-2 text-center mb-2">
	          <div class="title">
	            <h3 class="display-2 text-white"> รุ่น <?php echo $version_name ?></h3>
	            <h4 class="text-white mt-3">ระดับชั้นประกาศนียบัตรวิชาชีพ ปีการศึกษา <?php echo $year ?></h4>
            </div>
        </div>
      </div>
    </div>
	</div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-borderless bg-light">
                    <thead class="bg-primary text-light text-center">
                        <tr>
                        <th scope="col">รหัสนักศึกษา</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">ชื่อเล่น</th>
                        <th scope="col">แผนกวิชา</th>
                        <th scope="col">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) { 
                                $str_sub = trim($row['fname'])." ";
                    ?>
                        <tr>
                        <th scope="row" width="200px" class="text-center"> <?php echo $row['stid'] ?> </th>
                        <td width="200px">  <?php echo $str_sub.$row['name'].$row['lname'] ?> </td>
                        <td class="text-center" width="100px"> <?php echo $row['nickname'] ?></td>
                        <td class="text-center" width="100px"> <?php echo $row['stclass'] ?></td>
                        <td class="text-center" width="100px"> <a class="btn btn-secondary" href="detail-pvc.php?stid=<?php echo $row['stid']?>"> รายละเอียด </a></td>
                        </tr>
                    <?php
                            }

                        } else {
                            echo "ไม่พบข้อมูล";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




        
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
