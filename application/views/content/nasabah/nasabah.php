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
                    <h2>Data Nasabah <small>  </small></h2>
                    <div id="gender" class="btn-group">
  <a href="<?php echo base_url('nasabah/baru') ;?>" class="btn btn-info" ><i class="fa fa-plus"></i>  Tambah Data</a>
  
</div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action table-bordered">
                        <thead>
                          <th class="column-title">No</th>
                          <th class="column-title">Nama</th>                            
                          <th class="column-title">Jenis Kelamin</th> 
                          <th class="column-title">no Telepon</th>                             
                          <th class="column-title">Alamat</th> 
                          <th class="column-title no-linklast"><span class="nobr">Action</span></th>
                       </thead>
                        <tbody>
<?php $query=$this->db->get('nasabah'); ?>
<?php if ($query->num_rows()>0) {$no=0;
  foreach ($query->result() as $t) {$no++;
    if ($t->nasabah_jk=='L') {
      $jk='Laki-Laki';
    }else{
      $jk='Perempuan';
    }
?>


               <tr class="even pointer">
                 <td class=" "><?=$no?></td>
                 <td class=" "><?=$t->nasabah_nama?></td>
                 <td class=" "><?=$jk?></td>
                 <td class="a-right a-right "><?=$t->nasabah_notel?></td>
                 <td class=""><?=$t->nasabah_alamat?></td>
                                                     <td>
<div class="form-group">
<div id="gender" class="btn-group">
  <a href="<?=base_url('nasabah/edit/'.$t->nasabah_id)?>" class="btn btn-warning ttt"  data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
  <a href="<?=base_url('nasabah/hapus/'.$t->nasabah_id)?>" class="btn btn-danger ttt"  data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></a>
</div>
</div>
</td>                



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

							