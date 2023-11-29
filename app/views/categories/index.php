<h2>Golongan</h2>

<a href="<?php echo URL; ?>/categories/input" class="btn">Input Golongan</a>

<table>
      <tr>
            <th>KODE GOLONGAN</th>
            <th>NAMA GOLONGAN</th>
            <th>EDIT</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/categories/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>