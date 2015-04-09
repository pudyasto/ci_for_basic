<?php

/* 
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

?>
<div class="box">
    <div class="box-header">
        Master Data Karyawan
    </div><!-- /.box-header -->
    <div class="box-body">    
        <div class="row">
            <div class="col-lg-12">
                <table id="example1" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th width="10">ID</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Jenis Kelamin</th>
            <th>Edit</th>
            <th>Hapus</th>
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
            <td><a href=\"".base_url()."crud/edit/".$key->id."\">Edit</a></td>
            <td><a href=\"".base_url()."crud/delete/".$key->id."\">Hapus</a></td>
          </tr>";
}
?>
        </tbody>
      </table>            
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" align="right">
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <a href="<?=base_url() . 'crud/add';?>" class="btn btn-primary">Tambah</a>
        <a href="<?=base_url() . 'crud';?>" class="btn btn-default">Refresh</a>
    </div>
</div><!-- /.box -->