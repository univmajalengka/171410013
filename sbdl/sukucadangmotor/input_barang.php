<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Input penjualan</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SukuCadangMotor</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="input_user.php" target="blank" >user</a></li>
      <li><a href="input_barang.php" target="blank">Barang</a></li>
      <li><a href="input_laporan.php" target="blank">Laporan</a></li>
      <li><a href="input_laporanpenjualan.php" target="blank">Tgl Laporan Penjualan</a></li>
      <li><a href="input_laporanstokbarang.php" target="blank">Laporan Stok Barang</a></li>
      <li><a href="input_notapenjualan.php" target="blank">Nota Penjualan</a></li>
      <li><a href="input_penjualan.php" target="blank">Penjualan</a></li>
    </ul>
  </div>
</nav>
<form method="post" class="form-horizontal" action="save_barang.php">
<div class="container">
  <form action="/action_page.php">

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">ID Barang:</label>
      <div class="col-sm-4 control-label">
      <input type="text" class="form-control" id="usr" name="id_barang">
    </div>
    </div>  

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">harga:</label>
      <div class="col-sm-4 control-label">
      <input type="text" class="form-control" id="usr" name="harga">
    </div>
    </div>  

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">Nama Barang:</label>
      <div class="col-sm-4 control-label">
      <input type="text" class="form-control" id="usr" name="nama_barang">
    </div>
    </div> 

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">Jumlah Barang:</label>
      <div class="col-sm-4 control-label">
      <input type="text" class="form-control" id="usr" name="jumlah_barang">
    </div>
    </div>

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">Spesifikasi:</label>
      <div class="col-sm-4 control-label">
      <input type="text" class="form-control" id="usr" name="spesifikasi">
    </div>
    </div> 

    <div class="form-group">
      <label for="usr" class="col-sm-3 control-label">Tgl Barang Masuk:</label>
      <div class="col-sm-4 control-label">
      <input type="date" class="form-control" id="usr" name="tgl_barang_masuk">
    </div>
    </div> 
      <input type="submit" name="simpan" value="simpan">
</form>

<hr>
<?php 
include 'view_barang.php';
?>
<hr>
<a href="index.php">Home</a>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</html>