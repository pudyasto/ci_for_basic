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
<script src="<?=base_url('assets/plugins/jqueryform/jquery.form.js');?>"></script>
<script type="text/javascript">
      
function simpanfoto(){
    var userfile=$('#userfile').val();
    
    $('#uploadfotopasien').ajaxForm({
     url:'<?php echo base_url("uploader/upload_file"); ?>',
     type: 'post',
     data:{"userfile":userfile},
     beforeSend: function() {
        var percentVal = 'Mengupload 0%';
        $('.msg').html(percentVal);
     },
     uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = 'Mengupload ' + percentComplete + '%';
        $('.msg').html(percentVal);
     },
     beforeSubmit: function() {
      $('.hasil').html('Silahkan Tunggu ... ');
     },
     complete: function(xhr) {
        $('.msg').html('Mengupload file selesai!');
     }, 
     success: function(resp) {
        $('.hasil').html(resp);
     },
    });     
};
</script>    
<section class="content">
  <div class="row">
    <div class="col-lg-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Contoh Upload file</h3>
        </div><!-- /.box-header -->
          <div class="box-body">                      
            <form role="form" name="uploadfotopasien" id="uploadfotopasien" 
                  action="javascript:simpanfoto();" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <h3>
                        <label class="label label-info msg">
                            Silahkan pilih file
                        </label>                            
                    </h3>
                    <input id="userfile" name="userfile" type="file">
                </div>
                <button type="submit" onclick="javascript:simpanfoto();" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Upload
                </button>
                <div class="form-group">
                    <div class="hasil"></div>
                </div>
            </form>
          </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div>   <!-- /.row -->
</section><!-- /.content -->