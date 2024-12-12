<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID Mahasiswa</th>
                <th>Nilai Preferensi</th>
                <th>Ranking</th
            </tr>
        </thead>
        <tbody>
            <?php foreach ($preferensi as $rank): ?>
                <tr>
                    <td><?= esc($rank['id_mahasiswa']); ?></td>
                    <td><?= esc($rank['nilai_preferensi']); ?></td>
                    <td><?= esc($rank['ranking']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
