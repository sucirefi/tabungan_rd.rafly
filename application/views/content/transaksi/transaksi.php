 <?php $query=$this->db->get('transasik'); ?>
 <style type="text/css">
  .gaya{
    border-radius: 5px;
  }
  .ttt{
    padding: 2px 10px;
  }
</style>
 <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Master Transaksi <small>  </small></h2>
                    <div id="gender" class="btn-group">
  <a href="<?php echo base_url('transaksi/baru') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
  
</div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">

                            
                            <th class="column-title">No</th>
                            <th class="column-title">Nasabah</th>
                            <th class="column-title">User ID</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            </th>
                            <!-- <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th> -->
                          </tr>
                        </thead>

                        <tbody>
<?php if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $tran) {$no++;
?>
               <tr class="even pointer">
                 <td class=" "><?=$no?></td>
                 <td class=" "><?=$tran->transaksi_nasabah?></td>
                 <td class=" "><?=$tran->transaksi_user?></td>
                 <td>
<div class="form-group">
<div id="gender" class="btn-group">
  <a href="<?=base_url('transaksi/view/'.$tran->transaksi_id)?>" class="btn btn-info ttt"  data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></i></a>
  <a href="<?=base_url('transaksi/edit/'.$tran->transaksi_id)?>" class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
  <a href="<?=base_url('transaksi/hapus/'.$tran->transaksi_id)?>" class="btn btn-danger ttt"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
</div>
</div>
</td>                



</tr>
<?php
  }
}else{ ?>
  <td colspan="4" style="text-align: center;"><b>Data Masih Kosong</b></td>
<?php }?>
              
                          
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>

							