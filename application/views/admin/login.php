<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('') ?>/asset/template/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('') ?>/asset/template/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('') ?>/asset/template/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('') ?>/asset/template/admin/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('') ?>/asset/template/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="./login.css">
  </link>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" >
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body" style="margin-top: 180px; border-radius: 30px;">
      <div class="login-logo">
        <a href="<?= base_url() ?>admin/login"><b>Login</b></a>
      </div>

      <div style="width: 100%; height: 5rem; display:flex; justify-content: center; align-items:center; margin-bottom:3rem;">
        <div style="background-color: #000;width: 50%;  height: 3rem; display: flex; align-items: center; justify-content: center;" >
          <a href="" type="button" style="font-weight: 700; font-size: 1.9rem; color: #fff;">Sign In</a>
        </div>
     <div style="border: 1.9px solid #000 ;width: 50%;  height: 3rem; display: flex; align-items: center; justify-content: center;" >
          <a href="" type="button"  style="font-weight: 700; font-size: 1.9rem; color: #000;">Sign Up</a>
        </div>

      </div>

      <form action="<?php echo base_url('') ?>admin/login/auth" method="post">
        <div class="form-group has-feedback">
          <input type="text" name="ip-username" class="form-control" placeholder="Input Username" style="height: 5rem;"><br />

        </div>
        <div class="form-group has-feedback">
          <input type="password" name="ip-pass" class="form-control" placeholder="Input Password" style="height: 5rem;"><br />

        </div>
        <h6 style="text-align: end; margin-top: -30px; margin-bottom: 20px;">lupa password</h6>
        <div class="row" style="display: flex; justify-content: center;">
          <div class=" col-xs-12"> 
          <button type=" submit" name="btnSubmit" class="btn btn-block " style="background-color: #000; height: 5rem;  color:aliceblue;">Login</button>
          </div>

        </div>
      </form>


    </div>
    <!-- /.login-box-body -->
  </div>

  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>