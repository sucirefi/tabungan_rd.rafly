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
      Edit Data Nasabah</h4>
  </div>
<div class="panel-body">  
             
                <form action="<?php echo base_url('nasabah/ubah'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

                <input type="hidden" name="id" value="<?=$n->nasabah_id?>">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" class="form-control gaya" name="nama" value="<?=$n->nasabah_nama?>">
                        </div>
                      </div>
                       <div class="form-group">
                       <?php if ($n->nasabah_jk=="L") {
                       	$l='checked';
                       	$p=null;
                       }else{
                       	$l=null;
                       	$p='checked';
                       	} ?>
                        <label class="control-label col-md-3" for="nomor">Jenis Kelamin<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="radio" name="jk" value="L" <?=$l?>> Laki Laki
                        <input type="radio" name="jk" value="P" <?=$p?>> Perempuan
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">No Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" name="nomer" class="form-control gaya" value="<?=$n->nasabah_notel?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <textarea class="form-control gaya" name="alamat"><?=$n->nasabah_alamat?></textarea>
                        </div>
                      </div>

                      

  <div class="form-group" style="margin-left: 10px;">
       <a href="<?php echo base_url('nasabah'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form>             
   
</div>
      </div>
    </div>
    </div>