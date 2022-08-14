   <!-- Main content -->
   <section class="content">
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if($this->session->flashdata('status')) {?>
          <div class="alert alert-<?php echo $this->session->flashdata('status') == 'failed' ? 'danger' : 'success'?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><?php echo $this->session->flashdata('status') == 'failed' ? 'Alert' : 'Info'?></h5>
            <?php echo $this->session->flashdata('message')?>
          </div>
          <?php } ?>
            <div class="card">
              <div class="card-header">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Daftar Tempat Wisata</h3>
                  <a href="<?php echo base_url('home/pesan_tiket')?>" class="btn btn-warning btn-sm">Pesan Tiket</a>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Identitas</th>
                    <th>No Hp</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Dewasa</th>
                    <th>Anak</th>
                    <th>Harga Tiket</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($data as $d){?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $d['nama_lengkap']?></td>
                    <td><?php echo $d['nomor_identitas']?></td>
                    <td><?php echo $d['no_hp']?></td>
                    <td><?php echo $d['tanggal_kunjungan']?></td>
                    <td><?php echo $d['nama_tempat']?></td>
                    <td><?php echo $d['pengunjung_dewasa']?></td>
                    <td><?php echo $d['pengunjung_anak']?></td>
                    <td><?php echo $d['harga_tiket']?></td>
                    <td><?php echo $d['total_bayar']?></td>
                    <td><a href="<?php echo base_url('home/edit_pesan_tiket/'.$d['id'])?>" class="btn btn-warning btn-sm">edit</a> &nbsp; <a href="<?php echo base_url('home/delete_pesan_tiket/'.$d['id'])?>" class="btn btn-danger btn-sm">delete</a></td>
                  </tr>
                  <?php $no++; } ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

