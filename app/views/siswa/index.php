<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Siswa</h3>

            <?php foreach( $data['mhs'] as $mhs ) : ?>
            <ul>
                <li><?= $mhs['nama']; ?></li>
                <li><?= $mhs['kelas']; ?></li>
                <li><?= $mhs['jurusan']; ?></li>
                <li><?= $mhs['email']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>

</div>