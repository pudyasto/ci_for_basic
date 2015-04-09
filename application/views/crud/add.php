<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Tambah Data Karyawan</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php
            $attributes = array('role' => 'form', 'id' => 'formadd');
            echo form_open('crud/save',$attributes); 
        ?>
          <div class="box-body">
          <?php 
            echo validation_errors('<div class="alert alert-danger"><button class="close" data-dismiss="alert" type="button">×</button>','</div>');
          ?>
            <input type="hidden" name="id" />
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" class="form-control" value="<?php echo set_value('namalengkap'); ?>"
                     id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea style="resize: vertical;" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah"><?php echo set_value('alamat'); ?></textarea>
            </div>
            <div class="form-group">
              <label for="telepon">No Telepon</label>
              <input type="text" class="form-control" value="<?php echo set_value('telepon'); ?>"
                     id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <select class="form-control" id="kelamin" name="kelamin">
                  <option value="" <?php echo set_select('kelamin', '', TRUE); ?>>-- Pilih Jenis Kelamin --</option>
                  <option value="LAKI-LAKI" <?php echo set_select('kelamin', 'LAKI-LAKI'); ?>>LAKI-LAKI</option>
                  <option value="PEREMPUAN" <?php echo set_select('kelamin', 'PEREMPUAN'); ?>>PEREMPUAN</option>
              </select>
            </div>
          </div><!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?=base_url() . 'crud';?>" class="btn btn-default">Batal</a>
          </div>
        <?php echo form_close(); ?>
      </div><!-- /.box -->
    </div>
  </div>   <!-- /.row -->
</section><!-- /.content -->