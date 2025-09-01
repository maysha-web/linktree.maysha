<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <a href="tambah.php">+ Tambah Siswa</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM tbsiswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"
            <td>{$row['nis']}</td>
            <td>{$row['nama']}</td>
            <td>{$row[''kelas]}</td>
            <td>
            <a href='edit.php?nis={$row['nis']}'>Edit</a>
            <a href='delete.php?nis={$row['nis']}' onclick='return confirm(/"Yakin ingin menghapus?\")'>Hapus</a>
            </td>
            </tr>";
        
        }
            ?>
            </table>

    
</body>
</html>