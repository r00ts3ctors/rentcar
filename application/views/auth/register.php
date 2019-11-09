<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Amezia - Responsive Bootstrap 4 Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="A premium admin dashboard template by themesbrand" name="description" />
  <meta content="Themesbrand" name="author" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- App css -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg-white">

  <!-- Resister page -->
  <div class="row">
    <div class="col-lg-3 pr-0">
      <div class="card mb-0 shadow-none">
        <div class="card-body">

          <h3 class="text-center m-0">
            <a href="#" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/logo-sm.png" height="60" alt="logo" class="my-3"></a>
          </h3>

          <div class="px-3">
            <h4 class="text-muted font-18 mb-2 text-center">Free Register</h4>
            <p class="text-muted text-center">Get your free Amezia account now.</p>
            <?= form_error('username', '<div class="text-danger">','</div>') ?>
            <?= form_error('email', '<div class="text-danger">','</div>') ?>
            <?= form_error('password', '<div class="text-danger">','</div>') ?>

            <form class="form-horizontal my-4" action="<?php echo base_url('auth/prosesRegister') ?>" method="post">

              <div class="form-group">
                <label for="username">Username</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" name="username" placeholder="Enter Username">

                </div>
              </div>

              <div class="form-group">
                <label for="username">Email Address</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2"><i class="far fa-envelope"></i></span>
                  </div>
                  <input type="text" class="form-control" name="email" placeholder="Email Address">
                </div>
              </div>

              <div class="form-group">
                <label for="userpassword">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
              </div>

              <div class="form-group">
                <label for="userpassword">Confirm Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon4"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                </div>
              </div>



              <div class="form-group mb-0 row">
                <div class="col-12 mt-2">
                  <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                </div>
              </div>
            </form>
          </div>
          <div class="m-3 text-center bg-light p-3 text-primary">
            <h4 class="">Already have an account ? </h4>
            <p class="font-13">Login <span>Amezia</span> Now</p>
            <a href="#" class="btn btn-primary waves-effect waves-light">Log In</a>
          </div>
          <div class="mt-4 text-center">
            <p class="mb-0">© 2018-2019 Amezia. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 p-0 h-100vh d-flex justify-content-center">
      <div class="accountbg d-flex align-items-center">
        <div class="account-title text-center text-white">
          <h4 class="mt-3">Welcome To <span class="text-warning">AMEZIA</span> </h4>
          <h1 class="">Let's Get Started</h1>
          <p class="font-14 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
          <div class="border w-25 mx-auto border-warning"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Register page -->


  <!-- jQuery  -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/waves.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.min.js"></script>

  <!-- App js -->
  <script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>
</html>
