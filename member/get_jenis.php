<div class="form-group">
	  <label>Jenis Bahan : </label>
		<select name="pilihbahan" class="form-control">
			<option value="">-- Pilih Jenis Bahan --</option>
	<?php
	include '../login/koneksi.php';
	$idku = $_GET['idku'];
	$queryku ="SELECT * FROM barang WHERE SATUAN='$idku'";
	$hasilku = mysqli_query($koneksi, $queryku);
  while ($row11 = mysqli_fetch_array($hasilku)) {
?>
<option value="<?php echo $row11['nama_barang']; ?>"><?php echo $row11['nama_barang']; ?></option>
<?php
}
?>
</select>
</div>
</div>
