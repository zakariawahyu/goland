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
      <li class="tab active"><a href="#member">Sign Up Member</a></li>
      <li class="tab"><a href="#laundry">Sign Up Laundry</a></li>
    </ul>
    <div class="tab-content">
      <div id="member">
        <img class="profile" src="img/logo-alt.png">
        <form action="prosesdaftar-member.php" method="post">
          <div class="field-wrap">
            <input type="text" name="username" placeholder="Username" required autocomplete="off" />
          </div>
          <div class="field-wrap">
            <input type="password" name="password" placeholder="Password" required autocomplete="off" />
          </div>
          <div class="field-wrap">
            <input type="text" name="alamat" placeholder="Alamat Lengkap" required autocomplete="off">
          </div>
          <div class="field-wrap">
            <input type="text" name="telp" placeholder="No Telp" required autocomplete="off">
          </div>
          <input type="submit" name="submit" value="Submit" class="button button-blocklog">
        </form>
      </div>
      <div id="laundry">
        <img class="profile" src="img/logo-alt.png">
        <form action="prosesdaftar-laundry.php" method="post">
          <div class="field-wrap">
            <input type="text" name="username" placeholder="Username" required autocomplete="off" />
          </div>
          <div class="field-wrap">
            <input type="password" name="password" placeholder="Password" required autocomplete="off" />
          </div>
          <div class="field-wrap">
            <input type="text" name="nama" placeholder="Nama Laundry" required autocomplete="off">
          </div>
          <div class="field-wrap">
            <input type="text" name="alamat" placeholder="Alamat Lengkap" required autocomplete="off">
          </div>
          <div class="field-wrap">
            <input type="text" name="telp" placeholder="No Telp" required autocomplete="off">
          </div>
          <input type="submit" name="submit" value="Submit" class="button button-blocklog">
        </form>
      </div>
    </div>
  </div>
  <script src='../js/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>
