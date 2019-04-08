<?php
	include '../login/koneksi.php';
	$id = $_GET['id'];
	$query = "select * from laundry where kode_laundry='$id'";
	$hasil = mysqli_query($koneksi, $query);
?>
<form action="pemesanan.php" method="POST">
<?php
while ($row5 = mysqli_fetch_array($hasil)) {
	?>
	<h2><?php echo $row5['nama_laundry'];?></h2>
	<h6>Alamat : <?php echo $row5['alamat_laundry'];?></h6>
	<h6>No Telp : <?php echo $row5['notelp_laundry'];?></h6>
	<?php
} ?>
<div class="form-group">
     <label>Quantity (Kg / Pcs):</label>
        <input type="text" class="form-control" name="qty">
</div>

<div class="form-group">
     <label>Mau Laundry Apa ? : </label>
     <select class="form-control" name="pilih" onchange="showData2(this.value)">
			 <option value="">-- Silahkan Pilih --</option>
       <option value="Kg">Kiloan</option>
			 <option value="Pcs">Satuan</option>
     </select>
</div>

<div id="pilih">

</div>

<div class="form-group">
     <label>Produk : </label>
     <select class="form-control" name="produk">
			 <option value="">-- Pilih Produk --</option>
       <option value="Cuci">Cuci</option>
			 <option value="Cuci + Seterika">Cuci dan Seterika</option>
			 <option value="Dry Cleaning">Dry Cleaning</option>
			 <option value="Wet Cleaning">Wet Cleaning</option>
     </select>
</div>

<div class="form-group">
     <label>Paket :</label>
     <select class="form-control" name="paket">
			 <option value="">-- Pilih Paket --</option>
       <option value="normal services" >Normal Services</option>
			 <option value="One Day Services">One Day Services</option>
			 <option value="Urgent Services">Urgent Services</option>
     </select>
</div>

<div class="form-group">
     <label>Parfum:</label>
     <select class="form-control" name="parfum">
			 <option value="Pilih Parfum">-- Pilih Parfum --</option>
       <option value="Sakura" >Sakura</option>
			 <option value="Lavender">Lavender</option>
			 <option value="Luxor">Luxor</option>
			 <option value="Downy Passion">Downy Passion</option>
     </select>
</div>

<div class="form-group">
     <label>Antar Jemput:</label>
     <select class="form-control" name="kurir">
       <option value="Ya">Ya</option>
       <option value="Tidak">Tidak</option>
     </select>
</div>
<div class="form-group">
	<label>Saya setuju dengan pilihan saya, ya saya akan pilih</label>
	<input type="checkbox" name="setuju" value="<?php echo $id; ?>" class="form-control">
</div>
  <button type="submit" class="btn btn-danger" value="$id"name="submit">Submit</button>
 </form>
