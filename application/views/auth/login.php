<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Masuk</title>
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
            margin-left: 150px;
        }
        .illustration {
            width: 50%;
            background-color: #9FC743;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .illustration img {
            max-width: 100%;
            height: auto;
        }
        .card {
            border: none;
			margin: -50px;
        }
        .card-title {
            font-weight: 800;
            font-size: 25px;
            margin-left: 80px;
            margin-right: 130px;
        }
        .form-control {
            border-radius: 30px;
            background-color: #F7F7F7;
            border: none;
            padding: 14px;
            height: 60px; 
        }
		
        .btn-custom {
            border-radius: 30px;
            background-color: #000000;
            color: #FFFFFF;
            padding: 14px;
			margin-top: 20px;
            width: 100%;
            font-weight: 800;
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
            font-weight: 600;
        }
        .back-icon {
            font-size: 24px;
            margin-right: 20px;
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
        .error-message {
            color: red;
            margin-top: 0px; /* Atur jarak antara pesan error dan tombol */
            text-align: center;
        }
		.text-center {
			margin-top: 5px;
		}
        /* Loader Styles */
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .loader {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #000000;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 5s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<div class="loader-wrapper" id="loader" style="display: none;">
    <div class="loader"></div>
</div>

<div class="wrapper">
    <div class="form-container">
        
        
        <?php echo form_open('auth/login'); ?>
        <div class="card">
		<div class="header">
            <a href="<?php echo base_url('dashboard'); ?>" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <h2 class="card-title">Masuk</h2>
        </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="username" class="form-label">Nama Pengguna</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukan Nama Pengguna" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Kata Sandi" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-custom">Masuk</button>
                </div>
                <div class="error-message">
                    <?php echo validation_errors(); ?>
                    <?php if(isset($error)) echo $error; ?>
                </div>
                <div class="mb-3 text-center">
                    <p>Belum Punya akun? <a href="<?php echo base_url('auth/register')?>">Daftar</a></p>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    <div class="illustration">
        <img src="<?php echo base_url('assets/login.png'); ?>" alt="Illustration">
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const loader = document.getElementById('loader');

        form.addEventListener('submit', function() {
            loader.style.display = 'flex';
        });
    });
</script>
</body>
</html>
