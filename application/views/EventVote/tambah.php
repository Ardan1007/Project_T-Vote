<!-- <!DOCTYPE html>
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

	<style>

		.container {
			background:  url('../assets/background.png');
		}

	</style>
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

        
        <button type="submit" class="btn btn-primary">Tambah</button>
    <?php echo form_close(); ?>
</div>
</body>
</html> -->

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

	<style>
		body, html {
			height: 100%;
			margin: 0;
		}
		.main {
            width: 100%;
            height: 100%;
            background: url('../assets/background.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* align-items: center; */
            flex-direction: row;
        }
		
		.back-button {
			margin-bottom: 15px;
		}

		.form-control {
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
	<a href="<?php echo site_url('EventVote'); ?>" class="btn back-button">
		&larr; Kembali
	</a>
    <h2 style="font-weight: bold;">Tambah Event Vote</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <?php echo form_open('EventVote/tambah'); ?>
        <div class="mb-3">
            <label for="nama_EventVote" class="form-label">Nama Event</label>
            <input type="text" class="form-control" name="nama_EventVote" placeholder="Masukan Nama Event" value="<?php echo set_value('nama_EventVote'); ?>">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Event" value="<?php echo set_value('deskripsi'); ?>">
        </div>

        <!-- Anda bisa tambahkan form untuk upload foto kandidat di sini -->
        <button type="submit" class="btn">Tambah</button>
    <?php echo form_close(); ?>
</div>
</div>
</body>
</html>
