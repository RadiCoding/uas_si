<form action="<?= site_url('/tambah-bobot'); ?>" method="post">
    <?= csrf_field(); ?> <!-- CSRF Token untuk keamanan -->

    <div class="container mt-4">
        <h2><?= esc($page_title); ?></h2>

        <div class="row">
            <!-- Pilih Kode Kriteria -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <select class="form-control" id="nama_kriteria" name="nama_kriteria" required> <!-- Ubah name menjadi kode_kriteria -->
                        <?php foreach ($kriteria as $row): ?>
                            <option value="<?= $row['kode_kriteria']; ?>" <?= old('kode_kriteria') == $row['kode_kriteria'] ? 'selected' : ''; ?>>
                                <?= esc($row['kode_kriteria']); ?> - <?= esc($row['nama']); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('kode_kriteria'); ?></div>
                </div>
            </div>

            <!-- Nama Bobot -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_bobot">Nama Bobot</label>
                    <input type="text" class="form-control" id="nama_bobot" name="nama_bobot" value="<?= old('nama_bobot'); ?>" placeholder="Masukkan Nama Bobot" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('nama_bobot'); ?></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Nilai Bobot -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nilai_bobot">Nilai Bobot</label>
                    <input type="number" class="form-control" id="nilai_bobot" name="nilai_bobot" value="<?= old('nilai_bobot'); ?>" placeholder="Masukkan Nilai Bobot" required>
                    <div class="text-danger"><?= \Config\Services::validation()->getError('nilai_bobot'); ?></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= site_url('/dashboard'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</form>