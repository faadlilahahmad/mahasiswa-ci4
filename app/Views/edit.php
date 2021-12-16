<html>

<head>
    <title></title>
</head>

<body>
    <h3 align="center">FORM UBAH DATA</h3>

    <form action="<?= base_url('list/update/' . $mahasiswa['id']) ?>" method="POST">
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="nim" value="<?= $mahasiswa['id']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Tugas Terstruktur</td>
                <td>:</td>
                <td><input type="number" name="tt" value="<?= $mahasiswa['tt']; ?>" required /></td>
            </tr>
            <tr>
                <td>Tugas Mandiri</td>
                <td>:</td>
                <td><input type="number" name="tm" value="<?= $mahasiswa['tm']; ?>" required /></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td>:</td>
                <td><input type="number" name="uts" value="<?= $mahasiswa['uts']; ?>" required /></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td>:</td>
                <td><input type="number" name="uas" value="<?= $mahasiswa['uas']; ?>" required /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tambah" />
                    <input type="reset" name="reset" value="Hapus" />
                    <input type="button" name="back" value="Kembali" onclick="self.history.back()">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>