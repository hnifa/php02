<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <p class="bg-light">Sistem Penilaian</p>
    </header>
    <h3>Form Nilai Siswa</h3>
    <form class="form-horizontal" method="post" action="nilai_siswa.php">
    <div class="container">
    <div class="form-group row ml-auto mr-auto">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
        <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="UI/UX">UI/UX</option>
            <option value="Basis Data">Basis Data</option>
        </select>
        </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="uts" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="uas" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row ml-auto mr-auto">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
        <input id="tugas" name="tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row ml-auto mr-auto">
        <div class="offset-4 col-8">
        <input name="proses" type="submit" class="btn btn-primary" value="Simpan"/>
        </div>
    </div>
    </div>
    </form>
    <footer class="fixed-bottom">
    <p class="bg-light">Develop By Hanifa RV </p>
    </footer>
</body>
</html>
