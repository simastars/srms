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
    <div class="container">


        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Login</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h4>Admin Login</h4>
                <div class="form-group">
                    <label for="exampleInputBorder">Username<code></code></label>
                    <input type="text" class="form-control form-control-border" id="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputBorder">Password<code></code></label>
                    <input type="password" class="form-control form-control-border" id="password" placeholder="Password">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info login">Login</button>
                </div>
            </div>
            <!-- /.card-body -->
        </div>


    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {
        $(document).on("click", ".login", function(e) {
            e.preventDefault();
            const password = $("#password").val();
            const email = $("#username").val();
            $.ajax({
                url: "./model/dologin.php",
                type: "text",
                method: "POST",
                data: {
                    password: password,
                    email: email
                },
                success: function(data) {
                    if (data == "true") {
                        window.location.href = "./index.php";
                    } else if (data == "record-error") {
                        alert("Invalid combination of username and password")
                    } else {
                        alert(data);
                    }
                }
            })
        })
    })
</script>