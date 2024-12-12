<!-- app/Views/content/nilai_bobot.php -->

<div class="container mt-5">
    <h2 class="mb-4"><?= esc($page_title); ?></h2>

    <!-- Tabel Nilai Bobot Maksimum dan Minimum -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Kriteria</th>
                <th>Nilai Maksimum</th>
                <th>Nilai Minimum</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (['C1', 'C2', 'C3', 'C4', 'C5'] as $kriteria): ?>
                <tr>
                    <td><?= esc($kriteria); ?></td>
                    <td><?= esc($maxValues[$kriteria]); ?></td>
                    <td><?= esc($minValues[$kriteria]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
