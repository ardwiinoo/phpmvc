<div class="container mt-5">
    <div class="col-6">
        <h3>Daftar Mahasiswa</h3>

        <?php

        foreach ($data['mhs'] as $mhs) : ?>
            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item"><?= $mhs['name']; ?></li>
                <li class="list-group-item list-group-item-secondary"><?= $mhs['nim']; ?></li>
                <li class="list-group-item"><?= $mhs['prodi']; ?></li>
                <li class="list-group-item list-group-item-secondary"><?= $mhs['email']; ?></li>
            </ul>

        <?php endforeach; ?>

    </div>
</div>