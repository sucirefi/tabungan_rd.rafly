 <style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
</style>

<div class="row">
  <div class="col-md-12" style="min-height: 597px;">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h4 style="padding: 0px;margin:0px ">
      Edit Data Pengguna</h4>
  </div>
<div class="panel-body">  
             
                <form action="<?php echo base_url('pengguna/ubah'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

                <input type="hidden" name="id" value="<?=$u->user_id?>">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" name="user" class="form-control gaya" value="<?=$u->user_user?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Password<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" name="pass" class="form-control gaya" value="<?=$u->user_pass?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Foto <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="file" name="foto" class="form-control gaya" value="<?=$u->user_foto?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Level <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <?php if ($u->user_level=='admin') {
                          $a='checked';
                          $b=null;
                        }else{
                          $a=null;
                          $b='checked';
                          } ?>
                        <input type="radio" name="lvl" value="admin" <?=$a?>> Admin
                        <input type="radio" name="lvl" value="kasir" <?=$b?>> Kasir
                        </div>
                      </div>

                      

  <div class="form-group" style="margin-left: 10px;">
       <a href="<?php echo base_url('pengguna'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form>             
   
</div>
      </div>
    </div>
    </div>