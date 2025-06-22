<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AniBayan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <?php session_start(); ?>
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #F9FFD2;
    }
    .btn-user {
      background-color: #ABC76D;
    }
    .btn-admin {
      background-color: #BBCB56;
    }
    .card {
      height: 748px;
      width: 685px;
    }
    .title {
      color: #758E3C;
    }
    .sub-title {
      color: #5A751D;
    }
    .btn-submit {
      background-color: #5A751D;
    }
  </style>
</head>
<body class="d-flex justify-content-center align-items-center shadow vh-100">
  <div class="card shadow rounded-4 p-5 text-center d-flex justify-content-center align-items-center" style="background-color: #F6D965; max-width: 748px; width: 685px;">
    <h2 class="title fw-bold mb-2">Welcome to AniBayan</h2>
    <p class="sub-title mb-4">Choose your portal</p>
    <div class="d-flex justify-content-center gap-3">
      <a href="user/index.php" class="btn-user btn btn-success px-5 align-items-center">User</a>
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
            <form method="post" action="admin/index.php">
              <div class="row mb-3">
                <div class="col-12">
                  <label for="Username" class="form-label">Username</label>
                  <input type="Username" class="form-control"  name="Username" required>
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
                  <button type="submit" class="btn-submit btn btn-success w-100" >Login</button>
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
