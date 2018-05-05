 <?php $query=$this->db->get('transasik'); ?>
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
      Tambah Data Transaksi</h4>
  </div>
<div class="panel-body">  
             
                <form action="<?php echo base_url('transaksi/simpandetail'); ?>" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

<input type="hidden" name="id" value="<?=$t->transaksi_id?>">
 <div class="form-group">
                      

                    <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Simpan Saldo <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="number" name="simpan" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Ambil Saldo <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="number" name="ambil" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3" for="nomor">Data Entri<span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                        <input type="date" name="entri" value="<?=date('Y-m-d')?>" class="form-control gaya" readonly>
                        </div>
                      </div>

                      

  <div class="form-group" style="margin-left: 10px;">
       <a href="<?php echo base_url('transaksi'); ?>"class="btn btn-warning" type="button" name="cancel" value="cancel" style="color:#fff;">Cancel</a>
       <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
       <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
   </div>
                  </form>    <br><br>
<span class="label label-default"><i class="fa fa-tag"></i></span>
<span class="label label-info"><?=$t->transaksi_nasabah?></span>
<span class="label label-primary"><?=$t->transaksi_user?></span>
                  <br><br> 
    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">   
                            <th class="column-title">No</th>
                            <th class="column-title">Transaksi ID</th>
                            <th class="column-title">Simpan Saldo</th>
                            <th class="column-title">Ambil Saldo</th>
                            <th class="column-title">Entry</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            </th>
                            <!-- <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th> -->
                          </tr>
                        </thead>

                        <tbody>
<?php 
$query=$this->db->get_where('transaksi_saldo',['transaksi_tran_id'=>$t->transaksi_id]);
if ($query->num_rows()>0) {$no=0;$ambil=0;$masuk=0;
  foreach ($query->result() as $tran) {$no++;
$masuk=$masuk+$tran->masuk;
$ambil=$ambil+$tran->ambil;
?>
   
               <tr class="even pointer">
                 <td class=" "><?=$no?></td>
                 <td class=" "><?=$tran->transaksi_tran_id?></td>
                 <td class=" "><?=$tran->masuk?></td>
                 <td class=" "><?=$tran->ambil?></td>
                 <td class=" "><?=$tran->entri?></td>
                 <td>
<div class="form-group">
<div id="gender" class="btn-group">
  <a href="<?=base_url('transaksi/hapusdetail/'.$tran->transaksi_saldo_id.'/'.$tran->transaksi_tran_id)?>" class="btn btn-danger ttt"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
</div>
</div>
</td>                
</tr>
<tr>
  <td colspan="2" style="text-align: center;font-weight: bold;">Total Simpan</td>
  <td><?=$masuk?></td>
</tr>
<tr>
  <td colspan="2" style="text-align: center;font-weight: bold;">Total Keluar</td>
  <td></td>
  <td><?=$ambil?></td>
</tr>
<?php
  }
}else{ ?>
  <td colspan="6" style="text-align: center;"><b>Data Masih Kosong</b></td>
<?php }?>
 
                          
                        </tbody>
                      </table>        
   
</div>
      </div>
    </div>
    </div>


