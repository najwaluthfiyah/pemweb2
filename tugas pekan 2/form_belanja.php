<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <form method="POST">
            <h1> Online Shop Najwa </h1>
            <br>

  <div class="form-group row">
    <label for="Customer" class="col-2 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="Customer" name="Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="radio_0" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="TV"> 
        <label for="radio_1" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <textarea id="textarea" name="jumlah" cols="40" rows="1" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
		</div>
        <br>

        <div class="col-2 col-md-4">
            <br>
        <ul class="list-group">
                <li class="list-group-item active">Daftar Harga Produk</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">TV : 4.200.000</li>
                <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
            </ul>
		</div>
	</div>
</div>

<?php
error_reporting(0);
// tangkap input form
$customer = $_POST['Customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// list harga produk
$harga = [
    'Kulkas' => 3100000,  'TV' => 4200000,  'Mesin Cuci' => 3800000
];

// menghitung total harga
$total = $jumlah * $harga [$produk];

// format harga
$total = number_format($total);

// tampilkan hasil form
echo "Nama Customer: $customer";
echo "<br> Pilihan Produk: $produk";
echo "<br> Jumlah Belanja: $jumlah";
echo "<br> Total Belanja: $total";