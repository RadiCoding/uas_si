<!-- app/Views/content/form_input_alternatif.php -->

<?= session()->getFlashdata('success') ? '<div class="alert alert-success">' . session()->getFlashdata('success') . '</div>' : '' ?>
<?= session()->getFlashdata('error') ? '<div class="alert alert-danger">' . session()->getFlashdata('error') . '</div>' : '' ?>

<form action="<?= site_url('/tambah-alternatif'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token untuk keamanan -->

    <div class="container mt-4">
        <h2 class="mb-4">Form Input Alternatif</h2>

        <!-- Pilihan Mahasiswa -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="form-group">
                    <label for="id_mahasiswa">Mahasiswa</label>
                    <select class="form-control" id="id_mahasiswa" name="id_mahasiswa" required>
                        <option value="" disabled selected>Pilih Mahasiswa</option>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <option value="<?= $mhs['id']; ?>" <?= old('id') == $mhs['id'] ? 'selected' : '' ?>>
                                <?= $mhs['nama']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('id_mahasiswa'); ?></div>
                </div>
            </div>
        </div>

        <!-- Pilihan Bobot untuk Kriteria C1 hingga C5 -->
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="C<?= $i; ?>">Kriteria C<?= $i; ?></label>
                        <select class="form-control" id="C<?= $i; ?>" name="C<?= $i; ?>" required>
                            <option value="" disabled selected>Pilih Bobot Kriteria C<?= $i; ?></option>
                            <?php foreach ($bobot as $b): ?>
                                <option value="<?= $b['id_bobot']; ?>" <?= old('C' . $i) == $b['id_bobot'] ? 'selected' : '' ?>>
                                    <?= $b['nama_kriteria'] . ' - ' . $b['nama_bobot']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <div class="text-danger"><?= \Config\Services::validation()->getError('C' . $i); ?></div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>

        <!-- Submit Buttons -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('/dashboard'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</form>
