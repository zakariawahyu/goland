<div class="row">
  <div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Info Akun</h3>
      </div>
      <div class="box-body">
        <table class="table table-striped table-hover">
          <?php
          include "../login/koneksi.php";
          $nama_laundry = $_SESSION['username'];
          $query1 = "SELECT * FROM laundry WHERE username_laundry='$nama_laundry'";
          $hasil1 = mysqli_query($koneksi, $query1);
          $row = mysqli_fetch_array($hasil1);
          ?>
          <tr>
            <td width="150">Nama Laundry</td>
            <td width="20">:</td>
            <td><?php echo $row['nama_laundry'];?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $row['alamat_laundry'];?></td>
          </tr>
          <tr>
            <td>No Telp</td>
            <td>:</td>
            <td><?php echo $row['notelp_laundry']; ?></td>
          </tr>
          <tr>
            <td>Latitude</td>
            <td>:</td>
            <td><?php echo $row['latitude']; ?></td>
          </tr>
          <tr>
            <td>Longitude</td>
            <td>:</td>
            <td><?php echo $row['longitude']; ?></td>
          </tr>
        </table>
        <br><br><br>
        <?php if (empty($row['latitude']) or empty($row['longitude'])) {
        ?>
        <div class="box-footer">
          <div class="col-sm-offset-2 col-sm-10">
            <button onclick="getLocation()" type="submit" class="btn btn-success" name="tambah">Klik Disini Untuk Mendapatkan Latitude dan Longitude</button>
          </div>
        </div>
        <div class="box-footer">
          <div class="col-sm-offset-2 col-sm-10">
            <p>Silahkan Copy Paste Latitude dan Longitude di baawah ini : </p>
            <p id="demo"></p>
          </div>
        </div>

<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {

    x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
</script>
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Latitude : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="lat" name="lat" placeholder="Masukkan Latitude">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Longitude : </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="long" name="long" placeholder="Masukkan Longitude">
            </div>
          </div>
          <div class="box-footer">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-success" name="tambah">Update</button>
            </div>
            <?php
          }

            ?>
          </div>
        </form>
        <?php
        include "../login/koneksi.php";
        if (isset($_POST['tambah'])) {
          $nama_laundry = $_SESSION['username'];
          $lat = $_POST['lat'];
          $long = $_POST['long'];
          $quuerysa = "Update laundry set latitude='$lat', longitude='$long' where username_laundry='$nama_laundry'";
          $hasilsa = mysqli_query($koneksi, $quuerysa);
          if ($hasilsa) {
            echo "<script>alert('Data Berhasil Di Update'); document.location='index.php'</script>";
          } else {
            echo "<script>alert('Data Gagal Di Update')</script>";
          }
        }
         ?>
      </div>
    </div>
  </div>
</div>
