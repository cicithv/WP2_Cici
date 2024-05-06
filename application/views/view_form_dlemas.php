<html>
<head>
    <title>Form Input Dlemas</title>
</head>
<body>
    <center>
        <form action="<?= base_url('dlemas/cetak'); ?>"method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Data Siswa</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                        <th><input type="text" name="nama" id="nama" 
                        placeholder="Isikan Data">
                            <div class="unvalid-feedback"><?= form_error('nama')?></div>
                        </th>
                </tr>
                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <th><input type="text" name="nis" id="nis" 
                    placeholder="Isikan Data">
                        <div class="unvalid-feedback"><?= form_error('nis')?></div>
                    </th>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <th>:</th>
                        <th><input type="text" name="kelas" id="kelas" 
                        placeholder="Isikan Data">
                            <div class="unvalid-feedback"><?= form_error('kelas')?></div>
                        </th>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <th><input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                    placeholder="yyyy-mm-dd">
                        <div class="unvalid-feedback"><?= form_error('tanggal_lahir')?></div>
                    </th>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                        <th><input type="text" name="tempat_lahir" id="tempat_lahir" 
                        placeholder="Isikan Data">
                            <div class="unvalid-feedback"><?= form_error('tempat_lahir')?></div>
                        </th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <th><input type="text" name="alamat" id="alamat" 
                    placeholder="Isikan Data">
                        <div class="unvalid-feedback"><?= form_error('alamat')?></div>
                    </th>
                </tr>  
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <th>
                        <input type="radio" name="jenis_kelamin" 
                            id="pria" value="Pria">
                        <label for="Pria">Pria</label>
                        <input type="radio" name="jenis_kelamin" 
                            id="wanita" value="Wanita">
                        <label for="Wanita">Wanita</label>
                        <div class="unvalid-feedback"><?= form_error('jenis_kelamin')?></div>
                    </th>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                        <th>
                            <select name="agama" id="agama">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                            <div class="unvalid-feedback"><?= form_error('agama')?></div> 
                        </th>
                </tr>
                <tr>
                    <th colspan="3" align="center"><input type="submit" value="Submit"></th>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>