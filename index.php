<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Form Mahasiswa</h2>
    <form action="">
        <div class="row">
            <div class="col-md-6">
            <label>NIM</label>
            <input type="number" name="nim">
            <label>Nama</label>
            <input type="text" name="nama">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="laki-laki">Laki laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir">
            <label>Agama</label>
            <select name="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="katolik">Katolik</option>
                <option value="budha">Budha</option>
            </select>
            <input type="submit" value="Simplan">
            </div>
            <div class="col-md-6">
            <label>Alamat</label>
            <textarea name="alamat" cols="30" rows="10"></textarea>
            <label>No Telpn</label>
            <input type="text" name="no_telp">
            <label>E-Mail</label>
            <input type="email" name="email">
            <label>Jurusan</label>
            <select name="jurusan">
                <option value="informatika">Informatika</option>
                <option value="komunikasi">Komunikasi</option>
                <option value="akuntansi">Akuntansi</option>                
            </select>
            <label>Mata Kuliah</label>
            <select name="mata_kuliah">
                <option value="matematika">Matematika</option>
                <option value="bahasa_indonesia">Bahasa Indonesia</option>
                <option value="bahasa_inggris">Bahasa Ingris</option>                
            </select>
            <label>Nilai</label>
            <input type="number" name="nilai">
            </div>
        </div>
        <h1>Daftar Mahasiswa</h1>
        <table>
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
</html>