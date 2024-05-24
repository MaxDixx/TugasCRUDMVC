<?php
session_start();

require ('regist.php');

if (isset($_POST["signup"])) {
  if (registrasi($_POST) >  0 ) {
      echo "
          <script>
              alert('User Baru Berhasil Ditambahkan!')
          </script>
      ";
  } else {
      echo mysqli_error($con);
  }
}

if(isset($_SESSION["login"])) {
  header("Location: dashboard.php");
  exit;
}


if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["passwd"];

  $result = mysqli_query($con,"SELECT * FROM akun WHERE username = '$username'");

  // cek username
  if (mysqli_num_rows($result) === 1) {
      // cek password
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["passwd"])) {
          // set session
          $_SESSION["login"] = true;
          $_SESSION["user"] = $username;
          header("Location: dashboard.php");
          exit;
      };
  }

  $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk Angkasa Raya</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/x-icon" href="asset\asset\image 1.png">
</head>
<body>
  <img src="asset/asset/image 1.png" alt="Lambang Sekolah">
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form method="POST" action="" id="login" class="form">
        <h2 class="log">Login</h2>
        <div class="input-group">
          <input id="username" class="username" name="username" type="text" required>
          <label for="username">Username</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="password" class="password" name="passwd" type="password" required>
          <label for="password">Password</label>
          <div class="error"></div>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button class="btn-login" id="btn-login" type="submit" name="login" value="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form method="POST" action="" id="signup-form" class="form">
        <h2 class="su">Sign Up</h2>
        <div class="input-group">
          <input id="username-signup" class="username-signup" name="username-signup" type="text" required>
          <label for="username-signup">Username</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="nama" class="nama" name="nama" type="nama" required>
          <label for="nama">Nama</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="password-signup" class="password-signup" name="password-signup" type="password" required>
          <label for="password-signup">Password</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="confirm-password" class="confirm-password" name="confirm-password" type="password" required>
          <label for="confirm-password">Confirm Password</label>
          <div class="error"></div>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button class="btn-signup" id="btn-signup" type="submit" name='signup'>Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>
