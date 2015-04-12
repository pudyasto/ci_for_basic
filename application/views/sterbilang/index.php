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
<script type="text/javascript">
    function terbilang(){
        txtTerbilang = $('#txtTerbilang').val();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url().'sterbilang/konversi'; ?>",
            data: {"txtTerbilang":txtTerbilang},
            success: function(resp){
                    $("#hasil_terbilang").html("Terbilang : " + resp);
            },
            error:function(event, textStatus, errorThrown) {
                $("#hasil_terbilang").html('Error Message: '+ textStatus + ' , HTTP Error: '+errorThrown);
            },
            timeout: 4000
        });
    }
</script>    
<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Contoh Implementasi Terbilang</h3>
        </div><!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
                <?php $angka = 12101988; ?>
                <h3>
                    <label class="label label-info">
                        <?php echo $angka;?>
                    </label>
                </h3>
                <h3>
                    <label class="label label-danger">
                        <?php echo terbilang($angka)?>
                    </label>
                </h3>
            </div>
            <div class="form-group">
              <label for="txtTerbilang">Masukkan Angka</label>
              <input type="text" class="form-control" onkeyup="terbilang();"
                     id="txtTerbilang" name="txtTerbilang" placeholder="Masukkan Angka">
              <h2>
                <label class="label label-success" id="hasil_terbilang">
                    Terbilang :
                </label>
              </h2>
            </div>
          </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>   <!-- /.row -->
</section><!-- /.content -->