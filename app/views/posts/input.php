<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/posts/save" method="post">
    <table>
        
        <tr>
            <td>NAMA GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <textarea name="pel_alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
            <select name="pel_aktif" required>
                        <option value="Y">Aktif</option>
                        <option value="N">Nonaktif</option>
             </select><br>
            </td>
        </tr>
        <tr>
            <td>USER NAMA</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['optcats'] as $opt) { ?>
                        <option value="<?php echo $opt['user_id']; ?>"><?php echo $opt['user_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr> 
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>