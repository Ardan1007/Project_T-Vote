<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>

    <title>Tambah Event Vote</title>
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Event Vote</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <?php echo form_open('EventVote/tambah'); ?>
        <div class="mb-3">
            <label for="nama_EventVote" class="form-label">Nama Event Vote:</label>
            <input type="text" class="form-control" name="nama_EventVote" value="<?php echo set_value('nama_EventVote'); ?>">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi:</label>
            <input type="text" class="form-control" name="deskripsi" value="<?php echo set_value('deskripsi'); ?>">
        </div>

        <!-- Anda bisa tambahkan form untuk upload foto kandidat di sini -->
        <button type="submit" class="btn btn-primary">Tambah</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>