  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Santi ch.
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016-2021 </strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('bootstrap/plugins/jquery/jquery.min.js');?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('bootstrap/dist/js/adminlte.min.js');?>"></script>

<!-- date-range-picker -->

<script src="<?php echo base_url('bootstrap/zebra_datepicker/dist/zebra_datepicker.min.js');?>"></script>

<!-- DataTables -->
<script src="<?php echo base_url('bootstrap/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>



<!-- Toastr -->
<script src="<?php echo base_url('bootstrap/plugins/toastr/toastr.min.js');?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url('bootstrap/plugins/sweetalert2/sweetalert2.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('bootstrap/dist/js/adminlte.min.js');?>"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url('bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>


<!-- AdminLTE App -->


<script src="<?php echo base_url('bootstrap/dist/js/adminlte.min.js');?>"></script>

<script src="<?php echo base_url('jsconfig/table.js?v5');?>"></script>
<script>
  $(function () {

    $('#datepicker').Zebra_DatePicker({});


  })


</script>

<script type="text/javascript">
 <?php  if ($this->session->flashdata('del_success')):?>
    const Toast = Swal.mixin({
        
        position: 'center',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'ลบข้อมูลสำเร็จ'
      })
    <?php endif;?>

 <?php  if ($this->session->flashdata('edit_success')):?>
    const Toast = Swal.mixin({
        
        position: 'center',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'แก้ไขข้อมูลสำเร็จ'
      })
    <?php endif;?>

    <?php  if ($this->session->flashdata('insert_success')):?>
    const Toast = Swal.mixin({
        
        position: 'center',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'เพิ่มข้อมูลสำเร็จ'
      })
    <?php endif;?>
 

</script>