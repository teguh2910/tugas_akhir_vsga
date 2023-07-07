<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
</head>
<body>
    <center><h2>Form Mahasiswa</h2></center>
    <form action="">
        <div class="row">
            <div class="col-md-6">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="laki-laki">Laki laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control">
            <label>Agama</label>
            <select name="agama" class="form-control">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="budha">Budha</option>
            </select>
            <hr>
            <input type="submit" value="Simplan" class="btn btn-md btn-primary">
            </div>
            <div class="col-md-6">
            <label>Alamat</label>
            <textarea name="alamat" cols="30" rows="2" class="form-control"></textarea>
            <label>No Telpn</label>
            <input type="text" name="no_telp" class="form-control">
            <label>E-Mail</label>
            <input type="email" name="email" class="form-control">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control">
                <option value="informatika">Informatika</option>
                <option value="komunikasi">Komunikasi</option>
                <option value="akuntansi">Akuntansi</option>                
            </select>
            <label>Mata Kuliah</label>
            <select name="mata_kuliah" class="form-control">
                <option value="matematika">Matematika</option>
                <option value="bahasa_indonesia">Bahasa Indonesia</option>
                <option value="bahasa_inggris">Bahasa Ingris</option>                
            </select>
            <label>Nilai</label>
            <input type="number" name="nilai" class="form-control">
            </div>
        </div>
        <center><h1>Daftar Mahasiswa</h1></center>
        <table class="table">
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>JURUSAN</th>
                <th>MATAKULIAH</th>
                <th>NILAI</th>
                <th>NH</th>
                <th>KET</th>
            </tr>
        </table>
    </form>
</body>
<script src="js/bootstrap/bootstrap.js"></script>
</html>