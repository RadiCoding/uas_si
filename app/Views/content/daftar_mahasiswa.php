<!-- app/Views/content/daftar_mahasiswa.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Daftar Mahasiswa -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td><?= esc($row['nim']); ?></td>
                <td><?= esc($row['nama']); ?></td>
                <td><?= esc($row['alamat']); ?></td>
                <td>
                    <a href="<?= site_url('home/hapusMahasiswa/' . $row['id']); ?>" 
   class="btn btn-danger" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
   Hapus
</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Tombol untuk Tambah Mahasiswa -->
    <a href="<?= site_url('/input-mahasiswa'); ?>" class="btn btn-primary btn-lg mt-3">Tambah Mahasiswa</a>
</div>
