<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/') ;?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/') ;?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/') ;?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/') ;?>dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/') ;?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="<?php echo base_url('assets/') ;?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/') ;?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/') ;?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/') ;?>bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/') ;?>dist/js/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ;?>bower_components/datatables.net/js/jquery.dataTables.min.js""></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ;?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') ;?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js""></script>

<script>

  $(document).ready(function () {
    $('#dataTables-example').dataTable();
  });  
  $(document).ready(function () {
    $('#dataTable-example').dataTable();
  });  

  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
})
</script>
</body>
</html>