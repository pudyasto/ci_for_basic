<div class="box">
    <div class="box-header">
        <label class="label label-danger">
            <?php echo " Total data " . number_format($jmldata) . " - Ditampilkan dalam " . $this->benchmark->elapsed_time() ." Detik"; ?>
        </label>  
    </div><!-- /.box-header -->
    <div class="box-body">    
      <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th width="10">ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Jenis Kelamin</th>
          </tr>
        </thead>
        <tbody>
<?php
foreach ($data as $key) {
    echo "<tr>
            <td>".$key->id."</td>
            <td>".$key->namalengkap."</td>
            <td>".$key->alamat."</td>
            <td>".$key->nohp."</td>
            <td>".$key->kelamin."</td>
          </tr>";
}
?>
        </tbody>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Jenis Kelamin</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.box-body -->
    <div class="box-footer" align="right">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div><!-- /.box -->