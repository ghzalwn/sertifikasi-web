 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
          <?php if($this->session->flashdata('status')) {?>
          <div class="alert alert-<?php echo $this->session->flashdata('status') == 'failed' ? 'danger' : 'success'?> alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><?php echo $this->session->flashdata('status') == 'failed' ? 'Alert' : 'Info'?></h5>
            <?php echo $this->session->flashdata('message')?>
          </div>
          <?php } ?>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url('home/submit_tempat_wisata')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Tempat</label>
                    <input type="text" class="form-control" placeholder="" name="nama_tempat">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" class="form-control" placeholder="Price" name="price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">URL Thumnail</label>
                    <input type="text" class="form-control" placeholder="url" name="url">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->