<h2>Input Golongan</h2>

<form action="<?php echo URL; ?>/categories/save" method="post">
    <table>
        <tr>
            <td>Kode Golongan</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>