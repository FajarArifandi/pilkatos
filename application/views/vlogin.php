<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login Admin</title>

  <!-- Favicons -->
  <link href="<?= base_url('assets/images/' . $sekolah->logo); ?>" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/template'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?= base_url('assets/template'); ?>/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/template'); ?>/css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/template'); ?>/css/style-responsive.css" rel="stylesheet">

  <!-- Custom CSS tambahan -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    #login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .form-login {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      animation: fadeIn 0.8s ease;
    }

    .form-login-heading {
      text-align: center;
      margin-bottom: 25px;
      font-size: 22px;
      font-weight: 600;
      color: #0d6efd;
      letter-spacing: 1px;
    }

    .form-control {
      border-radius: 8px;
      height: 45px;
      font-size: 14px;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 8px rgba(13, 110, 253, 0.4);
    }

    .btn-theme {
      background: linear-gradient(45deg, #0d6efd, #05223d);
      border: none;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-theme:hover {
      background: linear-gradient(45deg, #05223d, #0d6efd);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(13, 110, 253, 0.4);
    }

    .login-wrap a {
      color: #0d6efd;
      font-size: 13px;
      transition: 0.3s;
    }

    .login-wrap a:hover {
      text-decoration: underline;
      color: #05223d;
    }

    i {
      font-size: 12px;
      color: red;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <div id="login-page">
    <div class="container">
      <?= form_open('auth/login', 'class="form-login"'); ?>
      <h2 class="form-login-heading">Admin</h2>
      <div class="login-wrap">
        <input type="text" name="username" class="form-control" placeholder="User ID" autofocus
          value="<?= set_value('username'); ?>">
        <i><?= form_error('username'); ?></i>
        <br>
        <input type="password" name="pass" class="form-control" placeholder="Password"
          value="<?= set_value('pass'); ?>">
        <i><?= form_error('pass'); ?></i>
        <br>
        <span class="pull-right">
          <a data-toggle="modal" href="login.html#myModal">Forgot Password?</a>
        </span>

        <br><br>
        <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
      </div>
      <?= form_close(); ?>

      <!-- Modal -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"
        class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background:#0d6efd; color:#fff; border-radius:8px 8px 0 0;">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                style="color:#fff;">&times;</button>
              <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="modal-body">
              <p>Enter your e-mail address below to reset your password.</p>
              <input type="text" name="email" placeholder="Email" autocomplete="off"
                class="form-control placeholder-no-fix">
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
              <button class="btn btn-theme" type="button">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal -->
    </div>
  </div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= base_url('assets/template'); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/template'); ?>/lib/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?= base_url('assets/template'); ?>/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("<?= base_url('assets/template'); ?>/img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
