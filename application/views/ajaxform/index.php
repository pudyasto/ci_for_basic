<script type="text/javascript">
    function simpan_data(){
        var namalengkap=$('#namalengkap').val();
        var goldarah=$('#goldarah').val();
        var kelamin=$('#kelamin').val();
        var telp=$('#telp').val();
        var alamat=$('#alamat').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ajaxform/save_data'); ?>",
            data: {"namalengkap":namalengkap,"goldarah":goldarah
                    ,"kelamin":kelamin,"telp":telp
                    ,"alamat":alamat},
            success: function(resp){
                    $("#hasil").html(resp);
            },
            error:function(event, textStatus, errorThrown) {
               alert('Error Message: '+ textStatus + ' , HTTP Error: '+errorThrown);
            }
        });
    }
    
</script>

<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Contoh Form dengan ajax</h3>
        </div><!-- /.box-header -->
          <div class="box-body">  
                <form role="form" name="formajax" id="formajax" >
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" id="namalengkap" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select class="form-control" id="goldarah">
                            <option value="">-- Pilih Gologan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" id="kelamin">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" id="telp" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <textarea style="resize: vertical" class="form-control" id="alamat"></textarea>
                    </div>
                    <button type="button" onclick="simpan_data();" class="btn btn-primary">
                        <span class="glyphicon glyphicon-save"></span>&nbsp;Simpan
                    </button>
                    <button type="reset" class="btn btn-default">
                        Batal
                    </button>
                </form>       
              
              <div id="hasil" style="padding-top: 20px;"></div>              
          </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>   <!-- /.row -->
</section><!-- /.content -->