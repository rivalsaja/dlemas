<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: 'Verdana', sans-serif;
    background-color: #fff9db; /* Warna kuning muda sebagai latar belakang */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 0;
}

form {
    background-color: #fff3cd; /* Warna kuning lebih gelap untuk form */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lebih gelap untuk kontras */
    padding: 25px;
    width: 100%;
    max-width: 400px;
    margin: auto;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #665c1e; /* Warna coklat kekuningan untuk teks */
}

input[type="text"],
input[type="date"],
textarea,
select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
    border: 1px solid #ffecb3; /* Warna kuning untuk border */
    font-size: 14px;
    background-color: #fff9db; /* Warna kuning muda untuk input */
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #ffc107; /* Warna kuning cerah untuk tombol submit */
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 15px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #e0a800; /* Warna kuning lebih gelap saat di-hover */
}

.radio-container {
    display: flex;
    justify-content: start;
    margin-bottom: 15px;
}

.radio-container label {
    margin-right: 20px;
    color: #665c1e; /* Warna coklat kekuningan untuk teks */
}

.radio-container input[type="radio"] {
    margin-right: 5px;
}

select {
    cursor: pointer;
    background-color: #fff9db; /* Warna kuning muda untuk dropdown */
}

/* Media query for smaller screens */
@media (max-width: 768px) {
    form {
        width: 90%;
        padding: 20px;
    }
}

</style>
</head>
<body>
  <form action="<?= site_url('siswa/store') ?>" method="post">
    <label for="nama_siswa">Nama Siswa:</label>
    <input type="text" id="nama_siswa" name="nama_siswa" value="<?= set_value('nama_siswa') ?>">
    <?= form_error('nama_siswa') ?>

    <label for="nis">NIS:</label>
    <input type="text" id="nis" name="nis" value="<?= set_value('nis') ?>">
    <?= form_error('nis') ?>

    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas" value="<?= set_value('kelas') ?>">
    <?= form_error('kelas') ?>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>">
    <?= form_error('tanggal_lahir') ?>

    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>">
    <?= form_error('tempat_lahir') ?>

    <label for="alamat">Alamat:</label>
    <textarea id="alamat" name="alamat"></textarea>

    <label>Jenis Kelamin:</label>
    <div class="radio-container">
      <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
      <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
    </div>

    <?= form_error('alamat') ?>
    <?= form_error('jenis_kelamin') ?>

    <label for="agama">Agama:</label>
    <select id="agama" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
      <option value="Protestan">Protestan</option>
      <option value="Khonghucu">Khonghucu</option>
    </select>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
