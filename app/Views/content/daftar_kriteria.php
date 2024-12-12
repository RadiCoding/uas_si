<!-- app/Views/content/daftar_kriteria.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Daftar Kriteria -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Bobot</th>
                <th>Sifat</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($kriteria)): ?>
                <?php foreach ($kriteria as $row): ?>
                    <tr>
                        <td><?= esc($row['kode_kriteria']); ?></td>
                        <td><?= esc($row['nama']); ?></td>
                        <td><?= esc($row['bobot']); ?></td>
                        <td><?= esc($row['sifat']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data kriteria.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Tombol untuk Tambah Kriteria -->
    <a href="<?= site_url('/input-kriteria'); ?>" class="btn btn-primary btn-lg mt-3">Tambah Kriteria</a>
</div>
