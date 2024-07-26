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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    <title>Beli Token</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #e9f5e1;
        }

        .sidebar {
            width: 300px;
            height: 100vh;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .logo img {
            width: 60%;
            margin-bottom: 50px;
            margin-left: 50px;
        }

        .menu {
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-grow: 1; 
        }

        .menu-item {
            background-color: #000000;
            color: #ffffff;
            border: none;
            padding: 15px;
            margin: 10px 0;
            border-radius: 30px;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            width: 100%;
        }

        .menu-item:hover {
            transform: scale(1);
            color: #9FC743;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .menu-item.active {
            color: #9FC743; 
        }

        .menu-item2 {
            color: #000000;
            padding: 15px;
            margin: 10px 0;
            text-decoration: none;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .logout-button {
            margin-bottom: 40px; 
            width: 80%;
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
            align-items: center;
            flex-direction: row;
        }

        .header {
            position: absolute;
            top: 20px;
            right: 50px;
            display: flex;
            align-items: center;
        }

        .header span {
            font-size: 1.2em;
            margin-right: 10px;
        }

        .profile-circle {
            width: 40px;
            height: 40px;
            border: 2px solid #000;
            border-radius: 50%;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content h1 {
            color: #000000;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 1em;
            color: #666666;
        }

        .illustration {
            margin-bottom: 20px;
        }

        .illustration img {
            width: 100%;
            max-width: 400px;
        }

        .card {
			background-color: #9FC743;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            padding: 10px;
			border: none;
            border-radius: 30px;
        }

        .card-title {
            color: #000000;
            font-size: xx-large;
            font-weight: bold;
        }

        .card-body {
            background-color: transparent;
        }

        .form-control {
            border: none;
            border-radius: 30px;
            padding: 15px;
            background-color: #F5F7F8;
            font-size: 1.1em;
            color: #C4C4C4;
        }

        .form-control:hover {
			
            background-color: #ffffff;
            color: #000000;
        }

        .form-label {
            font-size: 1.2em;
            color: #000000;
        }

        .btn {
            background-color: #ffffff;
            border: none;
			margin-top: 20px;
            border-radius: 30px;
            padding: 10px 50px;
            font-size: 1.2em;
            color: #000000;
            font-weight: bold;
        }

        .btn:hover {
            transform: scale(1);
            background-color: #000000;
            color: #85C400;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .button-container {
			
            display: flex;
            justify-content: center;
            align-items: center;
        }
		
    </style>
</head>
<body>
<div class="main">
    <div class="sidebar">
        <div class="logo">
            <img src="../assets/logo.png" alt="T-Vote">
        </div>
        <div class="menu">
            <a href="<?php echo base_url('Voting'); ?>" class="menu-item"> <i class="fas fa-vote-yea" style="margin-right: 10px;"></i>Vote</a>
            <a href="<?php echo base_url('pembelian/beli_token'); ?>" class="menu-item active"> <i class="fas fa-shopping-cart" style="margin-right: 10px;"></i>Beli Token</a>
        </div>
        <a href="<?php echo base_url('auth/logout'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
    </div>
    
    <div class="container mt-5">
        <div class="header">
            <span>Welcome, <?php echo $this->session->userdata('username'); ?></span> 
            <div class="profile-circle"></div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Beli Token</h2>
                        
                        <form action="<?php echo base_url('pembelian/beli_token'); ?>" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nominal_uang" class="form-label">Nominal Uang :</label>
                                <input type="number" class="form-control" name="nominal_uang" id="nominal_uang" value="<?php echo set_value('nominal_uang'); ?>" placeholder="Masukan Nominal Uang">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_token" class="form-label">Jumlah Token :</label>
                                <input type="number" class="form-control" name="jumlah_token1" id="jumlah_token1" value="<?php echo set_value('jumlah_token1'); ?>" placeholder="Jumlah Token" disabled>
                                <input type="number" class="form-control" name="jumlah_token" id="jumlah_token" value="<?php echo set_value('jumlah_token'); ?>" hidden>
                            </div>
                            <div class="mb-3">
                                <label for="bukti_bayar" class="form-label">Upload Bukti Pembayaran :</label>
								
                                <input type="file" name="bukti_pembayaran" class="form-control form-control-lg">
							
                            </div>
							<?php echo validation_errors(); ?>
                        	<?php if(isset($error)) echo $error; ?>
                        	<?php if(isset($success)) echo $success; ?>
                            <div class="button-container">
                                <button type="submit" class="btn btn-primary">Beli</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#nominal_uang').on('input', function() {
            var nominal_uang = $(this).val();
            var token = Math.floor(nominal_uang / 1000);
            $('#jumlah_token1').val(token);
            $('#jumlah_token').val(token);
        });
    });
</script>
</body>
</html>
