<?php
session_start();
if(!isset($_SESSION["loggedin"])){
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin DMSS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" type="text/css"/> -->

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <style>
    .hide {
      display: none;
    }
  </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>


      <!-- modal edit -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Student - Use tabs to enter field (Refresh the page in order to close the modal)</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="closeme">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- modal  -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modal_details" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" id="closemodal" data-dismiss="modal_details" aria-label="Close">
                &times;
              </button>
            </div>
            <div id="details">

            </div>
          </div>
        </div>
      </div>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user20-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="test">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">DMSS - Student Record Managament System</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                <a href="?page=addstudent" class="info-box-content">
                  <span class="info-box-text">Add Student</span>
                  <span class="info-box-number">
                    new
                  </span>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-search"></i></span>

                <a href="?page=view" class="info-box-content">
                  <span class="info-box-text">View </span>
                  <span class="info-box-number">Student</span>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up" id="load"></div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fa fa-edit"></i></span>

                <a href="?page=edit" class="info-box-content">
                  <span class="info-box-text">Edit</span>
                  <span class="info-box-number">Student</span>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-trash-alt" aria-hidden="true"></i></span>

                <a href="?page=delete" class="info-box-content">
                  <span class="info-box-text">Delete</span>
                  <span class="info-box-number">Student</span>
                </a>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="content" id="mainpage">

          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card" id="page">
                <div class="card-header">
                  <h5 class="card-title">Monthly Recap Report</h5>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <div class="btn-group">
                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                        <i class="fas fa-wrench"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                        <a class="dropdown-divider"></a>
                        <a href="#" class="dropdown-item">Separated link</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">
                        <strong>Metrics: 1 Jan, 2023 - Today</strong>
                      </p>

                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                      </div>
                      <!-- /.chart-responsive -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- ./card-body -->

                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Visitors Report</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="d-md-flex">
                    <div class="p-1 flex-fill" style="overflow: hidden">
                      <!-- Map will be created here -->
                      <div id="world-map-markers" style="height: 325px; overflow: hidden">
                        <div class="map"></div>
                      </div>
                    </div>
                  </div><!-- /.d-md-flex -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                  <!-- USERS LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Latest Members</h3>
                      <div class="card-tools">
                        <span class="badge badge-danger">8 New Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="users-list clearfix">
                        <li>
                          <img src="dist/img/user1-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Alexander Pierce</a>
                          <span class="users-list-date">Today</span>
                        </li>
                        <li>
                          <img src="dist/img/user8-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Norman</a>
                          <span class="users-list-date">Yesterday</span>
                        </li>
                        <li>
                          <img src="dist/img/user7-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Jane</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/user6-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">John</a>
                          <span class="users-list-date">12 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/user2-160x160.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Alexander</a>
                          <span class="users-list-date">13 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/user5-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Sarah</a>
                          <span class="users-list-date">14 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/user4-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nora</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                        <li>
                          <img src="dist/img/user3-128x128.jpg" alt="User Image">
                          <a class="users-list-name" href="#">Nadia</a>
                          <span class="users-list-date">15 Jan</span>
                        </li>
                      </ul>
                      <!-- /.users-list -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="javascript:">View All Users</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!--/.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->

              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->

                <!-- /.footer -->
              </div>

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023-2025 <a href="https://yahmis.com">Simastar</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="plugins/raphael/raphael.min.js"></script>
  <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>
<script>
  $(document).ready(function() {


    const page = "<?php echo $_GET['page']; ?>";
    // alert("ssss");
    if (page == "addstudent") {
      $("#mainpage").load("./view/addstudent.php");
    } else if (page == "view") {
      $("#mainpage").load("./view/view.php");
    } else if (page == "edit") {
      $("#mainpage").load("./view/edit.php");
    } else if (page == "delete") {
      $("#mainpage").load("./view/delete.php");
    }
    // $("#modal_details").modal("show");
    $(document).on("blur", "#modal_details", function() {
      $('#modal_details').modal('hide');
    })
    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        var last_id = $("#postid:last").attr("id");
      }
    });

    $(document).on("click", ".next", function(e) {
      e.preventDefault();
      const nexttab = $(this).attr("data-tab")
      const prevtab = nexttab - 1;
      $("#tab-" + nexttab).removeClass("hide")
      $("#tab-" + prevtab).addClass("hide")

    })
    $(document).on("click", ".prev", function(e) {
      e.preventDefault();
      const prevtab = $(this).attr("data-tab");
      const currentab = Number(prevtab) + 1;

      $("#tab-" + prevtab).removeClass("hide")
      $("#tab-" + currentab).addClass("hide")
    })

    // $(document).on("blur", "input", function(e) {
    //     let email = ""
    //     let field = e.target.id;
    //     let value = e.target.value;
    //     $.ajax({
    //         url: "updatefield.php",
    //         method: "POST",
    //         type: "text",
    //         data: {
    //             field: field,
    //             value: value,
    //             email: email
    //         },
    //         success: function(e) {
    //             console.log(e)
    //         }
    //     })
    // })

    $(document).on("click", ".submit", function(e) {
      e.preventDefault();
      var count = 0;

      $('input[class=add]').each(function() {
        var input = $(this);
        var value = input.val();
        var id = input.attr("id");
        console.log(id);
        if (id !== "oname") {
          if (value.length == 0) {
            // Display an error message or highlight the input
            count++;
          }
        }
        // Perform validation on the input value
      });
      if (count >= 1) {
        alert("All field are required");
        return false;
        e.stopPropagate();
      } else {
        const fname = $("#fname").val();
        const lname = $("#lname").val();
        const oname = $("#oname").val();
        const gender = $("#gender").val();
        const phone = $("#phone").val();
        const email = $("#email").val();
        const dob = $("#dob").val();
        const religion = $("#religion").val();
        const state = $("#state").val();
        const lga = $("#lga").val();
        const caddress = $("#caddress").val();
        const haddress = $("#haddress").val();
        const bgroup = $("#bgroup").val();
        const disability = $("#disability").val();
        const sponsor = $("#sponsor").val();
        const nextofkin = $("#nextofkin").val();
        const kinphone = $("#kinphone").val();
        const kinrel = $("#kinrel").val();
        const kinaddress = $("#kinaddress").val();
        const level = $("#level").val();

        $.ajax({
          url: "./model/submitdetail.php",
          type: "text",
          method: "POST",
          data: {
            fname: fname,
            lname: lname,
            oname: oname,
            gender: gender,
            phone: phone,
            email: email,
            dob: dob,
            religion: religion,
            state: state,
            lga: lga,
            caddress: caddress,
            haddress: haddress,
            bgroup: bgroup,
            disability: disability,
            sponsor: sponsor,
            nextofkin: nextofkin,
            level: level,
            kinphone: kinphone,
            kinrel: kinrel,
            kinaddress: kinaddress
          },
          success: function(data) {
            alert(data)
          }
        })
        $.post("./model/submitdetail.php", $("#details").serialize(), function(data) {
          console.log(data)
          // if (data == "success") {
          //     // swal("Success!", "Your application has successfully been submitted", "success");
          //     alert("Your application has successfully been submitted");
          //     window.location.href = './acknowledgement.php';
          // } else {
          //     // swal("Success!", "Error in submitting your details, please try again later.", "error");
          //     alert("Error in submitting your details, please try again later. ");
          //     window.location.href = './profile.php';
          // }
        });
      }
    })

    $(document).on("click", ".delete", function() {
      const email = $("#emaildelete").val();

      $.ajax({
        url: "./model/deletestudent.php",
        type: "text",
        method: "POST",
        data: {
          email: email
        },
        success: function(data) {
          alert(data)
        }
      })
    })

    $(document).on("click", ".search", function() {
      const email = $("#emailview").val();

      $.ajax({
        url: "./model/viewstudent.php",
        type: "text",
        method: "POST",
        data: {
          email: email
        },
        success: function(data) {
          // alert(data)
          if(data=="record-error"){
            alert("No student with "+email+" email/phone has been deleted.")
          }else if(data == "db-error"){
            alert("There was an error")
          }else{
            $("#details").html(data)
            $("#modal_details").modal("show")
          }
          console.log(data)
        }
      })
    })
    $(document).on("click", ".fetch", function() {
      const email = $("#emailedit").val();

      $.ajax({
        url: "./model/editstudent.php",
        type: "text",
        method: "POST",
        data: {
          email: email
        },
        success: function(data) {
          // alert(data)
          if(data=="record-error"){
            alert("No student with "+email+" email/phone has been deleted.")
          }else if(data == "db-error"){
            alert("There was an error")
          }else{
            $(".modal-body").html(data)
            $("#modal-lg").modal("show")
          }
          console.log(data)
        }
      })
    })

    $(document).on("blur", "td", function(){
      const field = $(this).attr("data-field");
      const value = $(this).html();
      const email=$("#email").html();
      $.ajax({
        url: "./model/updatefield.php",
        type: "text",
        method: "POST",
        data: {
          field: field,
          value:value,
          email:email
        },
        success: function(data) {
          console.log(data)
        }
      })
    })
    
  })
</script>