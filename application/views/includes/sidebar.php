 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="<?php echo base_url('home')?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('home/tempat_wisata')?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Tempat Wisata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('home/pesan_tiket')?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Pesan Tiket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('home/data_pesan_tiket')?>" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Data Pesan Tiket
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->