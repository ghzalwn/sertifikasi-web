<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('includes/head')?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center( align-items-center">
    <img class="animation__shake" src="<?php echo base_url()?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url()?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <?php $this->load->view('includes/sidebar')?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    
    if($page == 'dashboard'){
      $this->load->view('dashboard');
    }

    if($page == 'tempat_wisata'){
      $this->load->view('tempat_wisata');
    }

    if($page == 'add_tempat_wisata'){
      $this->load->view('add_tempat_wisata');
    }

    if($page == 'edit_tempat_wisata'){
      $this->load->view('edit_tempat_wisata');
    }

    if($page == 'pesan_tiket'){
      $this->load->view('pesan_tiket');
    }

    if($page == 'edit_pesan_tiket'){
      $this->load->view('edit_pesan_tiket');
    }

    if($page == 'data_pesan_tiket'){
      $this->load->view('data_pesan_tiket');
    }

    
    
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/assets/dist/js/adminlte.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php //echo base_url()?>/assets/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php //echo base_url()?>/assets/dist/js/pages/dashboard.js"></script> -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $('#select-tempat-wisata').on('change', function(){
    let dataPrice = $(this).find(':selected').data('price')
    $('#place-data-price').text(dataPrice)
    $('#harga_tiket').val(dataPrice)
  })

  $('#btn-hitung-total').on('click', function(){
    let jmlDewasa =  $('#pengunjung_dewasa').val()
    let jmlAnak =  $('#pengunjung_anak').val()
    let hargaTiket =  $('#harga_tiket').val()

  
   
    if(hargaTiket === ''){
      alert('harap pilih tempat wisata')
    }else{
      let hargaTiketDewasa = jmlDewasa !== '' ? parseInt(jmlDewasa) * parseInt(hargaTiket) : 0; 
      let hargaTiketAnak = jmlAnak !== '' ? parseInt(jmlAnak) * parseInt(hargaTiket) / 2 : 0
      let totalHarga = hargaTiketDewasa + hargaTiketAnak
      $('#total_bayar').val(totalHarga)
      $('#place-data-total-bayar').text(totalHarga)
    }

  })
</script>
</body>
</html>
