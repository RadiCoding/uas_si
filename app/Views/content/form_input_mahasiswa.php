<!-- app/Views/content/form_input_mahasiswa.php -->
<?= session()->getFlashdata('success') ? '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>' : '' ?>
<?= session()->getFlashdata('error') ? '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>' : '' ?>

<form action="<?= site_url('/tambah-mahasiswa'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token untuk keamanan -->
    
    <div class="container mt-4">
        <h2><?= esc($page_title); ?></h2>
        
        <div class="row">
            <!-- Nama Mahasiswa -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>" placeholder="Masukkan Nama Mahasiswa" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('nama'); ?></div>
                </div>
            </div>

            <!-- NIM -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= old('nim'); ?>" placeholder="Masukkan NIM" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('nim'); ?></div>
                </div>
            </div>
        </div>

        <!-- Alamat Mahasiswa -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Mahasiswa" required><?= old('alamat'); ?></textarea>
            <div class="text-danger"><?= \Config\Services::validation()->getError('alamat'); ?></div>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('home'); ?>" class="btn btn-secondary">Kembali</a>

        </div>
    </div>
</form>