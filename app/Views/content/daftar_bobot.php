<!-- app/Views/content/daftar_bobot.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Daftar Bobot -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nama Kriteria</th>
                <th>Nama Bobot</th>
                <th>Nilai Bobot</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bobot as $row): ?>
            <tr>
                <td><?= esc($row['nama_kriteria']); ?></td>
                <td><?= esc($row['nama_bobot']); ?></td>
                <td><?= esc($row['nilai_bobot']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Tombol untuk Tambah Bobot -->
    <a href="<?= site_url('/input-bobot'); ?>" class="btn btn-primary btn-lg mt-3">Tambah Bobot</a>
</div>
