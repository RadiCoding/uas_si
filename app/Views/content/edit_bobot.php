<!-- app/Views/content/edit_bobot.php -->

<div class="container mt-5">
    <h2><?= esc($page_title); ?></h2>

    <form action="<?= site_url('/edit-bobot/' . esc($bobot['nama_kriteria'])); ?>" method="post">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="<?= esc($bobot['nama_kriteria']); ?>" readonly>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_bobot">Nama Bobot</label>
                    <input type="text" class="form-control" id="nama_bobot" name="nama_bobot" value="<?= esc($bobot['nama_bobot']); ?>" required>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nilai_bobot">Nilai Bobot</label>
                    <input type="number" class="form-control" id="nilai_bobot" name="nilai_bobot" value="<?= esc($bobot['nilai_bobot']); ?>" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="<?= site_url('/daftar-bobot'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
