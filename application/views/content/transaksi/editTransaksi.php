
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
      Edit Data Transaksi</h4>
  </div>
<div class="panel-body">  
             
                <form action="<?php echo base_url('transaksi/ubah'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

<input type="hidden" name="id" value="<?=$t->transaksi_id?>">
                    <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Nasabah <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <select name="nasabah" class="form-control gaya" value="<?$t->traksaksi_nasabah?>">
                        <?php $query=$this->db->get('nasabah');
                        if ($query->num_rows()>0) {
                          foreach ($query->result() as $n) {
                            echo '<option value="'.$n->nasabah_nama.'">'.$n->nasabah_nama.'</option>';
                          }
                        }
                     ?>
                     </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">User<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="text" name="user" class="form-control gaya" value="<?=$t->transaksi_user?>" readonly>
                        </div>
                      </div>

                      

  <div class="form-group" style="margin-left: 10px;">
       <a href="<?php echo base_url('transaksi'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form>             
   
</div>
      </div>
    </div>
    </div>