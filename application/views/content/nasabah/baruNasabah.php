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
      Tambah Data Nasabah</h4>
  </div>
<div class="panel-body">  
             
                <form action="<?php echo base_url('nasabah/simpan'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">


                    <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" class="form-control gaya" name="nama">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Jenis Kelamin<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="radio" name="jk" value="L"> Laki Laki
                        <input type="radio" name="jk" value="P"> Perempuan
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">No Telepon <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" name="nomer" class="form-control gaya">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <textarea class="form-control gaya" name="alamat"></textarea>
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