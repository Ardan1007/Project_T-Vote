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

    <title>Tambah Pengguna Admin</title>
</head>
<body>

<div class="container mt-5">
    <h2>Tambah Pengguna Admin</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <?php echo form_open('admin_user/tambah'); ?>
        <div class="mb-3">
            <label for="username_adm" class="form-label">Username:</label>
            <input type="text" class="form-control" name="username_adm" value="<?php echo set_value('username_adm'); ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>
