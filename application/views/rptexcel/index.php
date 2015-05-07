<div class="box">
    <div class="box-header">
        <h2>
            Export Dat Into Excel
        </h2>
    </div><!-- /.box-header -->
    <div class="box-body">    
        <div class="row" style="padding-bottom: 10px;">
            <?php
                $attributes = array('role' => 'form', 'class' => 'form-horisontal'
                    , 'id' => 'form_add', 'name' => 'form_add');
                echo form_open('rptexcel/excelfiles',$attributes); 
            ?>
            <div class="col-lg-12">
            <div class="form-group">
              <label for="kelamin">Cetak Berdasarkan Jenis Kelamin</label>
              <select class="form-control" id="kelamin" name="kelamin">
                  <option value="">PILIH SEMUA</option>
                  <option value="LAKI-LAKI">LAKI-LAKI</option>
                  <option value="PEREMPUAN">PEREMPUAN</option>
              </select>
            </div>         
            <button type="submit" class="btn btn-primary">
                Cetak
            </button>
            </div>
            <?php echo form_close(); ?>
        </div>
        
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
            </div>
        </div>
    </div><!-- /.box-body -->
</div><!-- /.box -->