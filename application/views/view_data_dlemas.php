<html>
<head>
    <title>Tampil Data Dlemas</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Siswa</th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                    <th><?= $nama; ?></th>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                    <th><?= $nis; ?></th>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                    <th><?= $kelas; ?></th>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                    <th><?= $tanggal_lahir; ?></th>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                    <th><?= $tempat_lahir; ?></th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                    <th><?= $alamat; ?></th>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                    <th><?= $jenis_kelamin; ?></th>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                    <th><?= $agama; ?></th>
            </tr>
            <tr>
                <th colspan="3" align="center"><a href="<?= base_url('dlemas');?>">Kembali</a></th>
            </tr>
        </table>
    </center>
</body>
</html>