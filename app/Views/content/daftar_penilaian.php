<!-- app/Views/content/daftar_penilaian.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Daftar Penilaian -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Kode Kriteria</th>
                <th>Nilai Penilaian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penilaian as $row): ?>
            <tr>
                <td><?= esc($row['mahasiswa_id']); ?></td>
                <td><?= esc($row['kode_kriteria']); ?></td>
                <td><?= esc($row['nilai']); ?></td>
                <td>
                    <a href="<?= site_url('/edit-penilaian/' . $row['id_penilaian']); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= site_url('/hapus-penilaian/' . $row['id_penilaian']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Tombol untuk Tambah Penilaian -->
    <a href="<?= site_url('/input-penilaian'); ?>" class="btn btn-primary btn-lg mt-3">Tambah Penilaian</a>
</div>
