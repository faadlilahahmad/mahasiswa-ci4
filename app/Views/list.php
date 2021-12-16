<html>

<head>
    <title>Data Nilai Mahasiswa</title>
</head>

<body>
    <h3 align="center">DATA NILAI MAHASISWA</h3>

    <center>
        <form action="" method="GET">
            <label>Cari NIM :</label>
            <input type="text" name="keyword">
            <input type="submit" value="Search">
        </form>
    </center>

    <center>
        <table width="80%" border="1">
            <tr bgcolor="#539CDC" align="center">
                <th>NIM</th>
                <th>Nama</th>
                <th>Tugas Terstruktur</th>
                <th>Tugas Mandiri</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Input Nilai</th>
            </tr>

            <?php if ($mahasiswas) : ?>

                <?php foreach ($mahasiswas as $row) : ?>
                    <tr style="text-align: center; vertical-align: middle;">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tt']; ?></td>
                        <td><?php echo $row['tm']; ?></td>
                        <td><?php echo $row['uts']; ?></td>
                        <td><?php echo $row['uas']; ?></td>
                        <td><?php echo $row['na']; ?></td>
                        <td>
                            <a href="<?= base_url('list/edit/' . $row['id']) ?>"><button>Tambah</button></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </center>
    <br>
    <br>
</body>

</html>