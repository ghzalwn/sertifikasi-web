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
                  <a href="<?php echo base_url('home/add_tempat_wisata')?>" class="btn btn-warning btn-sm">Add Data</a>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Price</th>
                    <th>View Thumbnail</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach($data as $d){?>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $d['nama_tempat']?></td>
                    <td><?php echo $d['price']?></td>
                    <td><?php echo $d['url']?></td>
                    <td><a href="<?php echo base_url('home/edit_tempat_wisata/'.$d['id'])?>" class="btn btn-warning btn-sm">edit</a> &nbsp; <a href="<?php echo base_url('home/delete_tempat_wisata/'.$d['id'])?>" class="btn btn-danger btn-sm">delete</a></td>
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

