<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detail Visiting</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-5">
        <a href="<?= base_url('tujuan') ?>" class="btn btn-secondary mb-3">← Kembali</a>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Detail Visiting</h4>
            </div>
            <div class="card-body">
                <p><strong>Tujuan:</strong> <?= $detail['tujuan'] ?></p>
                <p><strong>Deskripsi:</strong> <?= $detail['deskripsi'] ?></p>
                <p><strong>Tanggal:</strong> <?= $detail['tanggal'] ?></p>
            </div>
        </div>
    </div>
</body>

</html>
