<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Belanja</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h3>Belanja Online</h3>
<hr>
  <form method="POST" action="form_belanja.php">
  <div class="container">
  <div class="container">  
  <div class="form-group row ml-auto mr-auto">
      <label for="kostumer" class="col-4 col-form-label">Costumer</label> 
      <div class="col-8">
        <input id="kostumer" name="kostumer" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
      <label class="col-4">Pilih Produk</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
          <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
          <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
      </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
      <div class="col-8">
        <input id="jumlah" name="jumlah" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row ml-auto mr-auto">
      <div class="offset-4 col-8">
        <input name="kirim" type="submit" class="btn btn-primary" value="Kirim"/>
      </div>
    </div>
  </div>
  </div>
  </form>
  <hr>
  <?php
  $kirim = $_POST['kirim'];
  $kostumer = $_POST['kostumer'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];

  if ($produk == "TV") {
      $harga = 4200000;
  }
  elseif($produk == "Kulkas") {
      $harga = 3100000;
  }
  elseif ($produk == "Mesin Cuci") {
      $harga = 3800000;
  }

  $total = $harga * $jumlah;
  
  echo 'Nama Costumer : '.$kostumer;
  echo "<br>Produk Pilihan : $produk";
  echo '<br>Jumlah Beli : '.$jumlah;
  echo '<br>Total Belanja : Rp. '.$total;
  ?>  
</body>
</html>


