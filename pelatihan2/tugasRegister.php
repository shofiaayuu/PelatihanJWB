<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom CSS styles */
    body {
      padding-top: 50px;
      background-color: darkgray;
    }

    .form-register {
      max-width: 400px;
      margin: 0 auto;
      background-color: cadetblue;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .form-register h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-register .form-group {
      position: relative;
    }

    .form-register .form-group i {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    .form-register .form-control {
      padding-left: 30px;
      margin-bottom: 20px;
    }

    .form-register button[type="submit"] {
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="form-register">
      <h2>Register</h2>
      <form>
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" class="form-control" id="name" placeholder="Enter your Name">
        </div>
        <div class="form-group">
          <i class="fas fa-user"></i>
          <input type="text" class="form-control" id="username" placeholder="Enter your Username">
        </div>
        <div class="form-group">
          <i class="fas fa-envelope"></i>
          <input type="email" class="form-control" id="email" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <i class="fas fa-home"></i>
          <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat">
        </div>
        <div class="form-group">
          <i class="fas fa-phone"></i>
          <input type="telepon" class="form-control" id="telepon" placeholder="Enter Telepon">
        </div>
        <div class="form-group">
          <i class="fas fa-lock"></i>
          <input type="password" class="form-control" id="password" placeholder="Enter Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
