<?php 
    include 'connect.php';
    $version = mysqli_real_escape_string($connection, $_GET['version']);
    $query = "SELECT * FROM tbl_alumni  WHERE version = '$version' ";
    $query_run = mysqli_query($connection, $query);
    $year_name = mysqli_fetch_row($query_run);
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

    <div class="section bg-info teext-white">
      <div class="row">
        <div class="col-12 col-lg-8  offset-lg-2 text-center">
	        <div class="title">
	            <h3 class="display-2 text-white"><?php echo $year_name[2] ?></h3>
                <h4 class="text-white"> ปีการศึกษา <?php echo $year_name[0] ?></h4>
	            <h4 class="text-warning"> ประธานรุ่น <?php echo $year_name[3] ?></h4>          
             </div>
            <div class="credits">
            <div class="col-md-5 mr-auto ml-auto">
                <div class="component">
                    <div class="card mb-4">
                            <div class="card-header">
                                <h4 class="card-title">เพิ่มข้อมูลผู้สำเร็จการศึกษา</h4>
                                <p class="card-text text-danger"> All For One</p>
                                <p class="card-text text-danger"> ประจำปีการศึกษา 2562</p>
                            </div>
                            <div class="card-footer">
                                <a href="addStudentId.php" class="btn btn-primary btn-block">เพิ่มข้อมูล</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <h1 class="text-dark">เลือกระดับชั้นที่ต้องการ</h1>
            </div>
        </div>
      </div>
    </div>

	<div class="page-hero bg-info text-white" id="banner">    
	<div class="bubbles d-none d-md-block">
     <div class="bubble bubble-1 rotate-bubble bg-warning"></div>
      <div class="bubble bubble-2 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-3 bubble-top-right bg-warning rotate-bubble"></div>
      <div class="bubble bubble-4 bubble-top-left bg-info rotate-bubble"></div>
      <div class="bubble bubble-5 bg-info rotate-bubble"></div>
      <div class="bubble bubble-6 bubble-bottom-right bg-danger rotate-bubble"></div>
      <div class="bubble bubble-7 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-8 bubble-top-left bg-success rotate-bubble"></div>
      <div class="bubble bubble-9 bg-warning rotate-bubble"></div>
      <div class="bubble bubble-10 bg-danger rotate-bubble"></div>
      <div class="bubble bubble-11 bubble-bottom-right bg-info rotate-bubble"></div>
      <div class="bubble bubble-12 bubble-top-right bg-success rotate-bubble"></div>
      <div class="bubble bubble-13 bubble-top-left bg-success rotate-bubble"></div>
      <div class="circle circle-1 bg-light rotate-circle"></div>
      <div class="circle circle-2 bg-success rotate-circle"></div>
      <div class="circle circle-3 bg-danger rotate-circle"></div>
      <div class="circle circle-4 bg-info rotate-circle"></div>
      <div class="circle circle-5 bg-success rotate-circle"></div>
      <div class="circle circle-6 bg-info rotate-circle"></div>
      <div class="circle circle-7 bg-warning rotate-circle"></div>
      <div class="circle circle-8 bg-white rotate-circle"></div>
      <div class="circle circle-9 bg-warning rotate-circle"></div>
      <div class="circle circle-10 bg-danger rotate-circle"></div>
    </div>



<div class="blog-posts bg-info">
	<div class="container">
        <div class="row">
            <div class="col-md-5 mr-auto ml-auto">
                <div class="component">
                    <div class="card mb-4">
                        <div class="card-header">
                        <img class="card-img" src="assets/img/cmt-icon.png" alt="logo">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">ระดับชั้นประกาศนียบัตรวิชาชีพ (ปวช.)</h4>
                            <p class="card-text text-danger"> รุ่น <?php echo $year_name[2] ?></p>
                            <p class="card-text text-danger"> ประจำปีการศึกษา <?php echo $year_name[0] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="pvcinfo.php?version=<?php echo urlencode($year_name[2]) ?>&year=<?php echo urldecode($year_name[0])?>" class="btn btn-primary btn-block">ดูข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 mr-auto ml-auto">
                <div class="component">
                    <div class="card mb-4">
                            <div class="card-header">
                                <img class="card-img" src="assets/img/cmt-icon.png" alt="logo">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">ระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</h4>
                                <p class="card-text text-danger"> รุ่น <?php echo $year_name[2] ?></p>
                                <p class="card-text text-danger"> ประจำปีการศึกษา <?php echo $year_name[0] ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="pvsinfo.php?version=<?php echo urlencode($year_name[2]) ?>&year=<?php echo urldecode($year_name[0])?>" class="btn btn-primary btn-block">ดูข้อมูล</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
