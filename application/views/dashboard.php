<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <title>T-Vote Dashboard</title>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow: hidden;
        }
        .landing-container {
            display: flex;
            align-items: center;
            justify-content: center; 
            background: url('./assets/background.png') no-repeat center center fixed;
            background-size: cover; 
            color: #FFFFFF;
            padding: 40px 40px; 
            height: 100vh; 
        }
        .content {
            flex: 1;
            padding: 40px;
            max-width: 600px;
            margin-top: 20px; 
        }
        .content h2 {
            font-size: 2em;
            font-weight: bold;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        .content p {
            font-size: 1.2em;
            margin-top: 20px;
            width: 120%;
            text-align: left;
        }
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 40px;
        }
        .buttons .btn {
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 30px;
            font-weight: bold;
            text-align: center;
            transition: all 0.3s ease;
        }
        .btn-vote {
            background-color: transparent;
            border: 1.5px solid #FFFFFF;
            border-radius: 30px;
            color: #FFFFFF;
            padding: 10px 30px;
            font-size: 1em;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .btn-vote:hover {
            background-color: #FFFFFF;
            transform: scale(1);
            color: #000000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
		}
        .illustration {
            margin-left: 40px;
        }
        .illustration img {
            width: 700px;
        }
        .header {
			
            position: absolute;
            top: 20px;
            left: 50px;
            right: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            height: 50px;
        }
        .header .btn {
            background-color: transparent;
            border: 1.5px solid #FFFFFF;
            border-radius: 30px;
            color: #FFFFFF;
            padding: 10px 30px;
            font-size: 1em;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .header .btn:hover {
            background-color: #FFFFFF;
            transform: scale(1);
            color: #000000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="assets/logo.png" alt="Logo">
        <?php { ?>
            <a href="<?php echo base_url('auth/login'); ?>" class="btn btn-login">Masuk</a>
        <?php } ?>
    </div>
    <div class="landing-container">
        <div class="content">
            <h2>Selamat Datang di T-Vote</h2>
            <p>
                Dengan hanya beberapa klik, Anda bisa menyuarakan pendapat dan memberikan dukungan pada kandidat atau pilihan yang Anda percaya. Mari bersama-sama membentuk masa depan yang lebih baik.
            </p>
            <div class="buttons">
                <a href="<?php echo base_url('voting'); ?>" class="btn btn-vote">Voting Sekarang</a>
                <!-- <button class="btn btn-token">Token : <?php echo $jumlah_token; ?></button> -->
            </div>
        </div>
        <div class="illustration">
            <img src="./assets/boxvote.png" alt="logo1">
        </div>
    </div>
</body>
</html>
