<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>SPK Mahasiswa Lulusan Terbaik</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Data Mahasiswa -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner"><!-- Jumlah mahasiswa -->
                            <p>Data Mahasiswa</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="/saw/kelolaMahasiswa" class="small-box-footer">Kelola Data <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- Data Kriteria -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $total_kriteria; ?></h3> <!-- Jumlah kriteria -->
                            <p>Data Kriteria</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="/saw/kelolaKriteria" class="small-box-footer">Kelola Data <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- Data Penilaian -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $total_alternatif ?? 0; ?></h3> <!-- Jumlah data penilaian -->
                            <p>Data Penilaian</p>
                        </div>
                        <div class="icon">  
                            <i class="ion ion-compose"></i>
                        </div>
                        <a href="/saw/kelolaPenilaian" class="small-box-footer">Kelola Data <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- Hasil SPK -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?= $hasil_spk ?? 0; ?></h3> <!-- Jumlah hasil akhir -->
                            <p>Hasil SPK</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-trophy"></i>
                        </div>
                        <a href="/saw/hasilSPK" class="small-box-footer">Lihat Hasil <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="container mt-5">
        <h1 class="text-center">Hasil SPK Beasiswa (Metode SAW)</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>Skor Preferensi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($preferences as $id => $score): ?>
                    <tr>
                        <td><?= $alternatf[$kode_alternatif]->nama_alternatif; ?></td>
                        <td><?= number_format($score, 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </section>
    <!-- /.content -->
</div>
