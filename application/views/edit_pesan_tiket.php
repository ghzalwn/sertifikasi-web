 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url('home/submit_pesan_tiket')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="" name="nama_lengkap" value="<?php echo $data['nama_lengkap']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Identitas</label>
                    <input type="text" class="form-control" placeholder="" name="nomor_identitas"  value="<?php echo $data['nomor_identitas']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor HP</label>
                    <input type="text" class="form-control" placeholder="" name="no_hp"  value="<?php echo $data['no_hp']?>" required>
                  </div>
                  <div class="form-group">
                    <label>Tempat Wisata</label>
                    <select class="form-control" id="select-tempat-wisata" name="id_tempat_wisata" required>
                      <option value="">Pilih</option>
                      <?php foreach($data_tempat as $d){?>
                      <option value="<?php echo $d['id']?>" data-price="<?php echo $d['price']?>" selected="<?php echo $data['id_tempat_wisata'] == $d['id'] ? true: false?>" ><?php echo $d['nama_tempat']?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Kunjungan</label>
                    <input type="date" class="form-control" placeholder="" name="tanggal_kunjungan" value="<?php echo $data['tanggal_kunjungan']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengunjung Dewasa</label>
                    <input type="text" class="form-control" placeholder="" id="pengunjung_dewasa" name="pengunjung_dewasa" value="<?php echo $data['pengunjung_dewasa']?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pengunjung Anak - Anak</label>
                    <input type="text" class="form-control" placeholder="" id="pengunjung_anak" name="pengunjung_anak" value="<?php echo $data['pengunjung_anak']?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga Tiket</label>
                    <input type="hidden" class="form-control" placeholder="" name="harga_tiket" id="harga_tiket" value="<?php echo $data['harga_tiket']?>">
                    <span id="place-data-price"><?php echo $data['harga_tiket']?></span>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Bayar</label>
                    <input type="hidden" class="form-control" placeholder="" name="total_bayar" value="" id="total_bayar" value="<?php echo $data['total_bayar']?>">
                    <span id="place-data-total-bayar"><?php echo  $data['total_bayar']?></span>
                  </div>
                 
                </div>

                <div class="card-footer">
                  <button type="button" class="btn btn-success" id="btn-hitung-total">Hitung Total Bayar</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('home/data_pesan_tiket')?>" class="btn btn-warning">Cancel</a>
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