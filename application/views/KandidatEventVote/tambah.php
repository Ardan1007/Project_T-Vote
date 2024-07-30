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

    <title>Tambah Kandidat</title>

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
		<a href="<?php echo site_url('EventVote'); ?>" class="btn btn-secondary back-button">
    &larr; Kembali
</a>

			<h2>Tambah Kandidat</h2>
			<?php echo validation_errors(); ?>
			<?php if(isset($error)) echo $error; ?>
			<form action="<?php echo base_url('KandidatEventVote/tambah'); ?>" method="post" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="id_event_vote" class="form-label">Event Vote</label>
					<select class="form-select" name="id_event_vote">
						<option value="">Pilih Event</option>
						<?php foreach ($EventVote as $event) : ?>
							<option value="<?php echo $event['id']; ?>"><?php echo $event['nama_event']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="mb-3">
					<label for="nama_kandidat" class="form-label">Nama Kandidat</label>
					<input type="text" class="form-control" name="nama_kandidat" placeholder="Masukan Nama Kandidat" value="<?php echo set_value('nama_kandidat'); ?>">
				</div>
				<div class="mb-3">
					<label for="visi_misi" class="form-label">Visi & Misi Kandidat</label>
					<input type="text" class="form-control" name="visi_misi" placeholder="Masukan Visi & Misi" value="<?php echo set_value('visi_misi'); ?>">
				</div>
				<div class="mb-3">
					<label for="foto" class="form-label">Foto</label>
					<input type="file" class="form-control" name="foto">
				</div>

				<button type="submit" class="btn">Tambah</button>
			</form>
		</div>
	</div>
</body>
</html>
