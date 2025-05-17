<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiting - CI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container"> <a class="navbar-brand" href="<?= base_url() ?>">Home</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('visiting') ?>">Visiting</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?= base_url('kategori') ?>">Kategori</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Update Data Visit</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" class="form" method="post">
                    <input type="hidden" name="id" value="<?= $detail['id'] ?>">
                    <div class="form-group"> <label for="email">Tujuan</label> <input type="text" name="visiting" class="form-control" maxlength="100" value="<?= $detail['tujuan'] ?>"> </div>
                    <div class="form-group"> <label for="email">Deskripsi</label> <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"><?= $detail['deskripsi'] ?></textarea> </div>
                    <div class="form-group"> 
                      <a href="<?= base_url('visiting') ?>" class="btn btn-danger w-40">Batal</a>
                      <input type="submit" value="Update Visit" class="btn btn-primary w-40"> </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
        <div class="container text-center">Copyright &copy <?= Date('Y') ?> Visiting</div>
    </footer> <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>