<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Alternatif</th>
                <?php foreach ($kriteria as $k): ?>
                    <th><?= esc($k['kode_kriteria']); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alternatif as $alt): ?>
                <tr>
                    <td><?= esc($alt['id_mahasiswa']); ?></td>
                    <?php foreach ($kriteria as $k): ?>
                        <td>
                            <?= round($alt['normalisasi'][$k['kode_kriteria']], 4); ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
