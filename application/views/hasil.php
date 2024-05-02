<!DOCTYPE html>
<html>
<head>
    <style>
body {
    font-family: 'Verdana', sans-serif; /* Font yang lebih modern */
    background-color: #fff9db; /* Warna kuning muda untuk latar belakang */
    margin-top: 250px;
    padding: 0;
    display: flex; /* Menggunakan flex untuk penyesuaian tampilan */
    justify-content: center;
    align-items: center;
    height: 100vh;
}

table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ffecb3; /* Warna kuning untuk border */
    padding: 8px;
    text-align: left;
}

th {
    background-color: #ffc107; /* Warna kuning cerah untuk header tabel */
    color: #665c1e; /* Warna coklat kekuningan untuk teks */
}

tr:nth-child(even) {
    background-color: #fff3cd; /* Warna kuning untuk baris genap */
}

a {
    background-color: #ffeb3b; /* Warna kuning cerah untuk tautan */
    color: #665c1e; /* Warna coklat kekuningan untuk teks */
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

a:hover {
    background-color: #ffd600; /* Warna kuning lebih gelap saat di-hover */
}

    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($siswa as $s): ?>
        <tr>
            <td><?= $s['nama_siswa'] ?></td>
            <td><?= $s['nis'] ?></td>
            <td><?= $s['kelas'] ?></td>
            <td><?= $s['tanggal_lahir'] ?></td>
            <td><?= $s['tempat_lahir'] ?></td>
            <td><?= $s['alamat'] ?></td>
            <td><?= $s['jenis_kelamin'] ?></td>
            <td><a href="<?= site_url('siswa/edit/' . $s['id']) ?>">Edit</a></td>
            <td><a href="<?= site_url('siswa/delete/' . $s['id']) ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <br>
</body>
<a href="<?= site_url('siswa/create') ?>">Kembali ke form input</a>
</html>