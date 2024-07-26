<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Daftar</title>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin: 0;
            display: flex;
            min-height: 100vh;
        }
        .wrapper {
            display: flex;
            flex: 1;
        }
        .form-container {
            width: 50%;
            padding: 50px;
            max-width: 400px;
            margin: auto;
        }
        .illustration {
            width: 50%;
            background-color: #9FC743;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            
            align-items: center;
            justify-content: center;
        }
        .illustration img {
            max-width: 110%;
            height: auto;
        }
        .card {
            border: none;
			margin: -50px;
        }
        .card-title {
			font-weight: 800;
            font-size: 25px;
            margin-left: 90px;
            margin-right: 140px;
			margin-top: 40px;
        }
        .form-control {
            border-radius: 30px;
            background-color: #F7F7F7;
            border: none;
            padding: 14px;
        }
        .btn-custom {
            border-radius: 30px;
            background-color: #000000;
            color: #FFFFFF;
			margin-top: 20px;
			
            padding: 14px;
            width: 100%;
            font-weight: bold;
            font-size: 18px;	
        }
		.btn-custom:hover {
            background-color: #9FC743;
            transform: scale(1);
            color: #000000;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);	
        }
        .form-label {
            margin-bottom: 0;
            font-size: 14px;
            /* font-weight: 600; */
        }
        .back-icon {
            font-size: 24px; 
            margin-right: 20px;
			margin-top: 40px;
            color: #000000;
            transition: color 0.3s ease;
        }
        .back-icon:hover {
            color: #9FC743; 
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="form-container">
        <div class="card">
			<div class="header">
				<a href="<?php echo base_url('login'); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
				<h2 class="card-title">Daftar</h2>
			</div>
            
			<?php echo validation_errors(); ?>
                        <?php if(isset($error)) echo $error; ?>
                        <?php echo form_open('auth/register'); ?>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Nama Pengguna" value="<?php echo set_value('username'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Kata Sandi" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan E-Mail" value="<?php echo set_value('email'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo set_value('nama'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">No. Handphone</label>
                        <input type="tel" name="no_hp" class="form-control" placeholder="Masukan No. Handphone" value="<?php echo set_value('no_hp'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo set_value('tgl_lahir'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan Konfirmasi Keamanan</label>
                        <input type="text" name="pertanyaan" class="form-control" placeholder="Masukan Pertanyaan Konfirmasi Keamanan" value="<?php echo set_value('pertanyaan'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban Konfirmasi Keamanan</label>
                        <input type="text" name="jawaban" class="form-control" placeholder="Masukan Jawaban" value="<?php echo set_value('jawaban'); ?>" required>
                    </div>
                    <div class="mb-5">
                        <button type="submit" class="btn btn-custom btn-block">Daftar</button>
                    </div>
					
                </form>
            </div>
			<?php echo form_close(''); ?>
        </div>
    </div>
	<div class="illustration">
    <img src="../assets/daftar.png" alt="Illustration">
</div>
</div>

</body>
</html>
