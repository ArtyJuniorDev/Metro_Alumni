<?php
  include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>CMT Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="A new design system for developing with less effort."
    />
    <meta name="author" content="BootstrapBay" />

    <link href="assets/img/cmt-icon.png" rel="icon" type="image/png" />

    <link rel="stylesheet" href="./assets/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/lazy.css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.0/css/all.css"
      integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body class="index">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img
            src="assets/img/cmt-icon.png"
            alt="Example Navbar 1"
            class="mr-2"
            height="60"
          />
          CMT Alumni
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavDropdown-7"
          aria-controls="navbarNavDropdown-7"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
          <ul class="navbar-nav">
            <li class="nav-item dropdown mx-2">
              <a
                class="nav-link"
                href="#"
                id="nav-inner-primary_dropdown_1"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Home</a
              >
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="nav-inner-primary_dropdown_1"
              >
                <a
                  class="dropdown-item"
                  href="documentation/getting_started.html"
                  target="_blank"
                  >Getting Started</a
                >
                <a
                  class="dropdown-item"
                  href="documentation/alerts.html"
                  target="_blank"
                  >Core Elements</a
                >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="page-hero bg-info text-white" id="banner">
      <div class="bubbles d-none d-md-block">
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
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8  offset-lg-2 text-center">
            <div class="title">
              <h3 class="display-3 text-white">CMT Alumni</h3>
              <h4 class="text-white">ระบบศิษย์เก่า CMT</h4>
            </div>
            <div class="credits"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="intro bg-light">
      <div class="container">
        <div class="row">
          <div
            class="col-md-6 offset-md-3"
            style="transform: translate(0, -70%);"
          >
            <div class="component">
              <div class="card">
                <div class="card-body col-md-10 offset-md-1">
                  <form action="addStudentInformation.php" method="post">
                    <div class="page-header mb-3 pt-3 ml-4">
                      <h4 id="colours" class="text-danger">เกิดข้อผิดพลาดกรุณาติดต่อ Admin หรือลองอีกครั้ง</h3>
                    </div>
                    <!-- <small id="searchHelp" class="form-text text-info">สามารถค้นได้จาก ชื่อ,ชื่อเล่น,และรหัสนักศึกษา</small> -->
                    <a
                      class="btn btn-info mt-1 btn-pill col-md-4 offset-md-4 text-light" href="addStudentId.php"
                    >
                      ค้นหารหัส
                    </a>
                  </form>

                  <div class="card-footer">
                    <!-- <a href="#a" class="btn btn-primary">Read More</a> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Card info -->

    <!-- -->

    <footer class="footer-1 bg-light text-dark">
      <div class="container">
        <div
          class="d-flex flex-column flex-md-row justify-content-between align-items-center"
        >
          <div class="links">
            <ul
              class="footer-menu list-unstyled d-flex flex-row text-center text-md-left"
            >
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
              <li><a href="" target="_blank">&nbsp;</a></li>
            </ul>
          </div>
          <div class="social mt-4 mt-md-0">
          </div>
        </div>
        <div class="copyright text-center">
          <hr />
          <p class="small">
            &copy; 2019
            <span class="text-danger"><i class="fas fa-like"></i></span> by Us
          </p>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/popper/popper.min.js"></script>
    <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- optional plugins -->
    <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="./assets/js/lazy.js"></script>
  </body>
</html>
