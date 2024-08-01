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

	<style>
		body, html {
			height: 100%;
			margin: 0;
		}
		.main {
            width: 100%;
            height: 100%;
            background: url('../assets/background.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;
        }
		.back-button {
			margin-bottom: 15px;
		}
		.form-select, .form-control {
			border-radius: 30px;
		}
		.btn {
            background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
            padding: 5px 50px;
            font-size: 18px;
            font-weight: bold; 
        }
        .btn:hover {
            background-color: #000000;
            color: #9FC743;
        }
	</style>

</head>
<body>
<div class="main">
<div class="container mt-5">
<a href="<?php echo site_url('admin/admin_user'); ?>" class="btn btn-secondary back-button">
    &larr; Kembali
</a>
    <h2>Tambah Pengguna Admin</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <?php echo form_open('admin_user/tambah'); ?>
        <div class="mb-3">
            <label for="username_adm" class="form-label">Username</label>
            <input type="text" class="form-control" name="username_adm" placeholder="Masukan Nama Admin"  value="<?php echo set_value('username_adm'); ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" class="form-control" name="password" placeholder="Masukan Kata Sandi">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    <?php echo form_close(); ?>
</div>
</div>
</body>
</html>
