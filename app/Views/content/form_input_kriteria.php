<!-- app/Views/content/form_input_kriteria.php -->

<?= session()->getFlashdata('success') ? '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>' : '' ?>
<?= session()->getFlashdata('error') ? '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>' : '' ?>

<form action="<?= site_url('/tambah-kriteria'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token untuk keamanan -->

    <div class="container mt-4">
        <h2 class="mb-4"><?= esc($page_title); ?></h2>

        <!-- Input Fields -->
        <div class="row">
            <!-- Kode Kriteria -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="kode_kriteria">Kode Kriteria</label>
                    <input type="text" class="form-control" id="kode_kriteria" name="kode_kriteria" value="<?= old('kode_kriteria'); ?>" placeholder="Masukkan Kode Kriteria" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('kode_kriteria'); ?></div>
                </div>
            </div>

            <!-- Nama Kriteria -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="nama">Nama Kriteria</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>" placeholder="Masukkan Nama Kriteria" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('nama'); ?></div>
                </div>
            </div>
        </div>

        <!-- Bobot -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="bobot">Bobot</label>
                    <input type="number" step="0.01" class="form-control" id="bobot" name="bobot" value="<?= old('bobot'); ?>" placeholder="Masukkan Nilai Bobot" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('bobot'); ?></div>
                </div>
            </div>

            <!-- Sifat Kriteria -->
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="sifat">Sifat Kriteria</label>
                    <select class="form-control" id="sifat" name="sifat" required>
                        <option value="Benefit" <?= old('sifat') == 'Benefit' ? 'selected' : '' ?>>Benefit</option>
                        <option value="Cost" <?= old('sifat') == 'Cost' ? 'selected' : '' ?>>Cost</option>
                    </select>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('sifat'); ?></div>
                </div>
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('/dashboard'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</form>
