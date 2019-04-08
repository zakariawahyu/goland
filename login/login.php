<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GO-LAUNDRY</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#loginmem">Log In Member</a></li>
      <li class="tab"><a href="#loginad">Log In Laundry</a></li>
    </ul>
    <div class="tab-content">
      <div id="loginmem">
        <img class="profile" src="img/logo-alt.png">
        <form action="check-login-member.php" method="POST">
          <div class="field-wrap">
            <input type="text" name="user" placeholder="Username" required autocomplete="off">
          </div>
          <div class="field-wrap">
            <input type="password" name="pw" placeholder="Password" required autocomplete="off">
          </div>
          <p class="created"><a href="created.php">Buat Buat Akun Baru !</a></p>
          <input type="submit" name="login" value="Log In" class="button button-blocklog">
        </form>
      </div>
      <div id="loginad">
        <img class="profile" src="img/logo-alt.png">
        <form action="check-login-laundry.php" method="post">
          <div class="field-wrap">
            <input type="text" name="username" placeholder="Username" required autocomplete="off">
          </div>
          <div class="field-wrap">
            <input type="password" name="password" placeholder="Password" required autocomplete="off">
          </div>
          <p class="created"><a href="created.php">Buat Buat Akun Baru !</a></p>
          <input type="submit" name="login" value="Log In" class="button button-blocklog">
        </form>
      </div>
    </div>
  </div>
  <script src='../js/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>
