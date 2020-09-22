<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Vigenere Cipher</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="<?= base_url('home/encryptpage'); ?>">Encrypt</a>
                    <a class="nav-item nav-link" href="<?= base_url('home/decryptpage'); ?>">Decrypt</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-3 mb-3" align="center">Vigenere Cipher - Text Decryption</h1>
        <br>
        <form action="<?= base_url('home/decryptpage'); ?>" method="POST">
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Ciphertext</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control <?= (form_error('code')) ? 'is-invalid' : ''; ?>" rows="5" id="code" name="code"><?= set_value('code'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= form_error('code'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pswd" class="col-sm-2 col-form-label">Key</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= (form_error('pswd')) ? 'is-invalid' : ''; ?>" id="pswd" name="pswd" value="<?= set_value('pswd'); ?>">
                    <div class="invalid-feedback">
                        <?= form_error('pswd'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 ml-auto">
                    <button type="submit" class="btn btn-primary">Decode</button>
                </div>
            </div>
        </form>
        <div class="form-group row">
            <label for="hasil" class="col-sm-2 col-form-label">Plaintext</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" rows="5" id="hasil" name="hasil" readonly><?= $hasil; ?></textarea>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>