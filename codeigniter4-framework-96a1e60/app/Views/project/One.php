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
                    <h1 class="h1">Jadikan WHOOPS itu sebagai teman</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" class="form" method="post">
                    <div class="form-group"> <label for="email">Tujuan</label> <input type="text" name="tujuan" class="form-control" maxlength="100"> </div>
                   <!--  <div class="form-group"> <label for="email">Kategori</label> <select name="kategori">
                        <option value="">Pilih</option> -->
                      <!--  <?php foreach ($list_category as $key => $item) : ?>
                            <option value="<?= $key+1 ?>"><?= $item ?></option>
                        <?php endforeach; ?> -->
                  <!--  </select> </div> -->
                    <div class="form-group"> <label for="email">Deskripsi</label> <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea> </div>
                    <div class="form-group"> <input type="submit" value="Submit Contents" class="btn btn-primary w-100"> </div>
                </form>
            </div>
            <div class="col-md-6">
                <!-- UNTUK LIST VISITING -->
                <?php foreach ($list_data as $item) : ?>
                    <div class="col-md-12 my-2 card">
                        <div class="card-body">
                            <h5 class="h5"><?= $item['tujuan'] ?></h5>
                            <p><?= $item['deskripsi'] ?></p>
                            <a href="<?= base_url('tujuan/detail/'.$item['id']) ?>" class="btn btn-sm btn-outline-info">Detail</a>
                            <a href="<?= base_url('tujuan/edit/'.$item['id']) ?>" class="btn btn-sm btn-outline-primary">Update</a>
                            <a href="<?= base_url('tujuan/delete/'.$item['id']) ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                        </div>
                    </div>
                <?php endforeach; ?>
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