<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Pendataan Arisan</b>KT. Guyub Makarti</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan masuk dulu lurd</p>

      <!-- <form action="<?= base_url('index.php/login/login_process') ?>" method="post"> -->
        <form id="formLogin">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control form-user-input"  placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control form-user-input" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
        $("#formLogin").on('submit', function (e) {
            e.preventDefault();
            checkLogin();
        });

        function checkLogin() {
            var link = "http://localhost/bismillah/user/check_login/";
            var dataForm = {};
            var allInput = $('.form-user-input');

            $.each(allInput, function (i, val) {
                dataForm[val['name']] = val['value'];
            });

            $.ajax(link, {
                type: 'POST',
                data: dataForm,
                success: function (data, status, xhr) {
                    var data_str = JSON.parse(data);

                    alert(data_str['pesan']);

                    if (data_str['sukses'] == 'ya') {
                        setSession(data_str['user']);

                    }
                },
                error: function (jqXHR, textstatus, errorMsg) {
                    alert('Error: '+ errorMsg);
                }
            })
        }

        function loadMenu(url) {
            $.ajax(url, {
                type: 'GET',
                success: function(data, status, xhr){
                    var objData = JSON.parse(data);

                    $('#kontenTemplate').html(objData.konten);
                    $('title').html(objData.titel);
                    $('.page-breadcrumb .page-title').html(objData.titel);
                },
                error: function (jqXHR, textstatus, errorMsg) {
                    alert('Error:'+ errorMsg);
                }
            })
        }

        function setSession(user) {
            var link = "http://localhost/wp3/fp_web3/client/index.php/login/setSession";

            var dataForm = {};
            dataForm['id_user'] = user['id_admin'];
            dataForm['email'] = user['email'];
            dataForm['level'] = user['level'];
            dataForm['nama_admin'] = user['nama_admin'];

            $.ajax(link, {
                type: 'POST',
                data: dataForm,
                success: function (data, status, xhr) {
                    location.replace('http://localhost/bismillah/index.php/admin');
                },
                error: function (jqXHR, textstatus, errorMsg) {
                    alert('Error: '+ errorMsg);
                }
            });
        }
    </script>

</body>
</html>
