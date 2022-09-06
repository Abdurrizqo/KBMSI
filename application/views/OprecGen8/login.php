<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('assetOprec/assetOprec8/stylelogin.css'); ?>">

    <title>Login OprecstaffGen8</title>
  </head>
  <body>
    <img id="aa" src="<?= base_url('assetOprec/assetOprec8/bg.jpg'); ?>" alt="">
<div class="container">
<div class="kata">
  <div class="text-center">
     <img src="<?= base_url('assets/img/kbmsi.png'); ?>">
    <h3 class="mb-4">Open Recruitment</h3>
    <center>
     <div class="login text-left">
      <form action=" <?= base_url('OprecstaffGen8/formulir'); ?> " method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">NIM</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nim" required>
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
        </div>

        <span style="color: red; font-weight:400;"> <?= $this->session->flashdata('message'); ?> </span>
        <center>
        <button type="submit" class="btn"><b>Login</b></button>
      </center>
      </form>
      </div>
  </center>
      </div>
</div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
