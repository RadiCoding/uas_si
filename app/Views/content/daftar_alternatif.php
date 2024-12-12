<!-- app/Views/content/daftar_kriteria.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Daftar Kriteria -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <th>C1</th>
                <th>C2</th>
                <th>C3</th>
                <th>C4</th>
                <th>C5</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($alternatif)): ?>
                <?php foreach ($alternatif as $row): ?>
                    <tr>
                        <td><?= esc($row['id_mahasiswa']); ?></td>
                        <td><?= esc($row['C1']); ?></td>
                        <td><?= esc($row['C2']); ?></td>
                        <td><?= esc($row['C3']); ?></td>
                        <td><?= esc($row['C4']); ?></td>
                        <td><?= esc($row['C5']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data alternatif.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- Tombol untuk Tambah Kriteria -->
    <a href="<?= site_url('/input-alternatif'); ?>" class="btn btn-primary btn-lg mt-3">Tambah Kriteria</a>
</div>
