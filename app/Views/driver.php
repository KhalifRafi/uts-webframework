<?= $this->extend('template/layout') ?>
<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Graphics</th>
            <th scope="col">Profesional Graphics</th>
            <th scope="col">Server Acc</th>
            <th scope="col">Processor with grap</th>
            <th scope="col">Chipset</th>
            <th scope="col">Processor</th>
            <th scope="col">Desktop Kit</th>
            <th scope="col">Embedded</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($driver as $d) : ?>
            <tr>
                <td><?= $d['graphics'] ?></td>
                <td><?= $d['professional'] ?></td>
                <td><?= $d['server'] ?></td>
                <td><?= $d['processorswithgp'] ?></td>
                <td><?= $d['chipsets'] ?></td>
                <td><?= $d['processors'] ?></td>
                <td><?= $d['desktop'] ?></td>
                <td><?= $d['embedded'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>