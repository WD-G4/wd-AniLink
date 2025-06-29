<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan</title>
  <link rel="icon" href="img/anilinklogo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background: url('./img/h2.jpg') no-repeat center center fixed;
      background-size: cover;
      background-attachment: fixed;
      height: 100vh;
      overflow: hidden;
      margin: 0;
    }

    .btn-user {
      background-color: #BBCB56;
    }

    .btn-admin {
      background-color: #BBCB56;
    }

    .card {
      height: auto;
      width: 685px;
    }

    .title {
      color: rgb(56, 80, 2);
    }

    .sub-title {
      color: rgb(63, 90, 0);
    }

    .btn-submit {
      background-color: #5A751D;
    }

    .glass {
      backdrop-filter: blur(8px) brightness(100%);
      background-color: rgba(255, 255, 255, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: inset 4px 4px 10px 4px rgba(255, 255, 255, 0.2);
    }
  </style>
</head>

<body class="d-flex justify-content-center align-items-center shadow">
  <?php if (isset($_SESSION["login_error"])) { ?>
    <div id="errorOverlay" class="d-flex justify-content-center align-items-center position-fixed top-0 start-0 w-100 h-100" style="z-index: 1055; background-color: rgba(0,0,0,0.2);">
      <div class="alert alert-danger alert-dismissible fade show text-center w-auto" role="alert">
        <?php
        echo $_SESSION["login_error"];
        unset($_SESSION["login_error"]);
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="closeOverlay()"></button>
      </div>
    </div>

    <script>
      function closeOverlay() {
        const overlay = document.getElementById('errorOverlay');
        if (overlay) {
          overlay.remove();
        }
      }
    </script>
  <?php } ?>

  <div class="glass card shadow rounded-4 p-5 text-center d-flex justify-content-center align-items-center my-5" style="max-width: 748px; width: 685px;">
    <h2 class="title fw-bold mb-2">Welcome to AniBayan</h2>
    <p class="sub-title mb-4">Choose your portal</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="user/Home.php" class="btn-user btn btn-success px-5 align-items-center">User</a>
      <button class="btn-admin btn btn-success px-4" data-bs-toggle="modal" data-bs-target="#adminLoginModal">Admin Login</button>
    </div>
  </div>
  <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-4">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModalLabel">Admin Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form method="post" action="login.php">
              <div class="row mb-3">
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <input type="username" class="form-control" name="username" required>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-12">
                  <label for="adminPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn-submit btn btn-success w-100">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>