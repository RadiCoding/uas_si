<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <base href="<?= base_url("assets") ?>/">
  <a href="../../index3.html" class="brand-link">
    <img src="dist/img/uin.png" alt="Apps Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Informatika UIN Malang</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Home -->
                <li class="nav-item">
                    <a href="<?php echo base_url('/dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Data Mahasiswa -->
                        <li class="nav-item">
                        <a href="/daftar-mahasiswa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                        <!-- Data Kriteria -->
                        <li class="nav-item">
                        <a href="/daftar-kriteria" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kriteria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="/daftar-bobot" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Bobot</p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="/daftar-alternatif" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Alternatif</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SAW Calculation Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                            Proses SAW
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Mencari Min Max -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('daftar-MaxMin'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mencari Min Max</p>
                            </a>
                        </li>
                        <!-- Hitung Normalisasi -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('/daftar-normalisasi'); ?>">
                            <i class="nav-icon fas fa-calculator"></i> Hasil Normalisasi
                            </a>
                        </li>
                        <!-- Hitung Perangkingan -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('Home/hitungRanking'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hitung Perangkingan</p>
                            </a>
                        </>
                        <!-- Hasil Keputusan -->
                        <li class="nav-item">
                            <a href="<?php echo site_url('Home/lihatKeputusan'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hasil Keputusan</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
</aside>
