<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Edit Data Karyawan</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php
            $id = $this->uri->segment(3);
            $attributes = array('role' => 'form', 'id' => 'formedit');
            echo form_open('crud/update/'.$id,$attributes); 
        ?>
          <div class="box-body">
          <?php 
            echo validation_errors('<div class="alert alert-danger"><button class="close" data-dismiss="alert" type="button">×</button>','</div>');
            foreach ($data as $val) {
                $namalengkap = $val->namalengkap;
                $alamat = $val->alamat;
                $telepon = $val->nohp;
                $kelamin = $val->kelamin;
            }
          ?>
              <input type="hidden" name="id" value="<?php echo $id;?>" />
            <div class="form-group">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" class="form-control" value="<?php echo $namalengkap; ?>"
                     id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea style="resize: vertical;" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Rumah"><?php echo $alamat; ?></textarea>
            </div>
            <div class="form-group">
              <label for="telepon">No Telepon</label>
              <input type="text" class="form-control" value="<?php echo $telepon; ?>"
                     id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
              <label for="kelamin">Jenis Kelamin</label>
              <select class="form-control" id="kelamin" name="kelamin">
                  <option value="" <?php echo set_select('kelamin', ''); ?>>-- Pilih Jenis Kelamin --</option>
                  <option value="LAKI-LAKI" <?php if(!strcmp('LAKI-LAKI',$kelamin)){echo "selected=selected";}?>>LAKI-LAKI</option>
                  <option value="PEREMPUAN" <?php if(!strcmp('PEREMPUAN',$kelamin)){echo "selected=selected";} ?>>PEREMPUAN</option>
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