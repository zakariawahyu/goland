<div class="row">
  <div class="col-xs-12">
    <form action="#" method="get" class="form-group">
      <div class="input-group">
        <input type="text" onkeyup="myFunction()" id="myInput" class="form-control" placeholder="Search Nama...">
      </div>
    </form>
    <div id="myTable">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Data Pemesanan</h3>
      </div>
      <div class="box-body">
      <form method="post">
        <table id="example1" class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor Telephone</th>
            <th>Alamat</th>
            <th>Status</th>
          </tr>
            <?php
            include "../login/koneksi.php";
            $query = "SELECT * from member";
            $hasil = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_array($hasil)) {
              ?>
              <tr>
                <td><?php echo $row['id_member']; ?></td>
                <td><?php echo $row['username_member']; ?></td>
                <td><?php echo $row['notelp_member']; ?></td>
                <td><?php echo $row['alamat_member']; ?></td>
                <td><?php echo $row['status_member']; ?></td>
              </tr>
              <?php
            }
             ?>
        </table>
        </form>
      </div>
      </div>
    </div>
  </div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
