<!-- app/Views/content/form_input_penilaian.php -->

<?= session()->getFlashdata('success') ? '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>' : '' ?>
<?= session()->getFlashdata('error') ? '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>' : '' ?>

<form action="<?= site_url('/tambah-penilaian'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token untuk keamanan -->

    <div class="container mt-4">
        <h2><?= esc($page_title); ?></h2>

        <div class="row">
            <!-- Mahasiswa -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="mahasiswa_id">Pilih Mahasiswa</label>
                    <select class="form-control" id="mahasiswa_id" name="mahasiswa_id" required>
                        <?php foreach ($mahasiswa as $row): ?>
                            <option value="<?= $row['id']; ?>" <?= old('mahasiswa_id') == $row['id'] ? 'selected' : ''; ?>>
                                <?= esc($row['nama']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('mahasiswa_id'); ?></div>
                </div>
            </div>

            <!-- Kriteria -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kriteria_id">Pilih Kriteria</label>
                    <select class="form-control" id="kode_kriteria" name="kode_kriteria" required>
                        <?php foreach ($kriteria as $row): ?>
                            <option value="<?= $row['kode_kriteria']; ?>" <?= old('kode_kriteria') == $row['kode_kriteria'] ? 'selected' : ''; ?>>
                                <?= esc($row['nama']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('kode_kriteria'); ?></div>
                </div>
            </div>
        </div>

        <!-- Nilai -->
        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" class="form-control" id="nilai" name="nilai" value="<?= old('nilai'); ?>" placeholder="Masukkan Nilai" required>
            <div class="text-danger"><?= \Config\Services::validation()->getError('nilai'); ?></div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('/dashboard'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</form>
