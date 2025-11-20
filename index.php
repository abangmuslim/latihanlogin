<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Login Multi User</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }
    </style>
  </head>

<body>

<form class="form-signin" method="post" action="cek_login.php">

  <div class="text-center mb-4">
    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Form Login</h1>
    <p>Masukkan username dan password Anda dengan benar!</p>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
    <label>Masukkan username Anda!</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <label>Masukkan password Anda!</label>
  </div>

  <div class="form-label-group">
    <select class="form-control" name="level" required>
        <option value="pegawai">Pegawai</option>
        <option value="operator">Operator</option>
        <option value="admin">Admin</option>
    </select>
    <label>Pilih level user</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

  <p class="mt-5 mb-3 text-muted text-center">&copy; Ngoding Pintar 2020-<?=date('Y')?></p>

</form>

</body>
</html>
