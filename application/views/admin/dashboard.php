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

    <title>Admin Dashboard</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Admin Dashboard</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="<?php echo base_url('EventVote'); ?>">Kelola Event Vote</a></li>
            <li class="list-group-item"><a href="<?php echo base_url('admin/pembelian'); ?>">Kelola Pembelian</a></li>
            <li class="list-group-item"><a href="<?php echo base_url('admin/admin_user'); ?>">Kelola Pengguna</a></li>
            <li class="list-group-item"><a href="<?php echo base_url('admin/hasil_voting'); ?>">Lihat Hasil Voting</a></li>
        </ul>
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

    <title>Kelola Even Vote</title>
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
            margin: 5px 0;
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
            background-color: #ffffff;
            padding: 20px;
            margin-left: 200px; 
            margin-right: 200px;
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
        
		/* .container {
			border-radius: 30px;
		} */

        .card {
            background-color: #9FC743;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            padding: 10px;
			border: none;
            border-radius: 30px;
        }

        .card-title {
            font-size: 2.5em;
            font-weight: bold;
			border-radius: 30px;
        }

        .btn {
            background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
            padding: 5px 50px;
            font-size: 18px;
            font-weight: bold;
			margin-left: 300px;
        }
        
        .btn:hover {
            background-color: #000000;
            color: #9FC743;
        }

		.form-select {
			border-radius: 30px;
		}

        .kandidat-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .kandidat-item {
            flex: 1 0 21%; 
            text-align: center;
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
        
			<a href="<?php echo base_url('EventVote'); ?>" class="menu-item">Kelola Event Vote</a>
			<a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item">Kelola Pembelian</a>
            <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item">Kelola Pengguna</a>
            <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Lihat Hasil Voting</a>

            <!-- <a class="menu-item2">Token : <?php echo $jumlah_token; ?></a> -->
        </div>
        <a href="<?php echo base_url('admin/loginadm'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
    </div>
    
    <!-- <div class="main">
        <div class="header">
            <span>Welcome, <?php echo $this->session->userdata('username'); ?></span> 
            <div class="profile-circle"></div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Voting</h2>
                            <?php echo validation_errors(); ?>
                            <?php if(isset($error)) echo $error; ?>
                            <?php echo form_open('voting/proses_vote'); ?>
                                <div class="mb-3">
                                    <label for="id_event_vote" class="form-label" style="font-size:larger;">Event Vote :</label>
                                    <select class="form-select" name="id_event_vote" id="id_event_vote">
                                        <option value="">Pilih Event Vote</option>
                                        <?php foreach ($EventVote as $event) : ?>
                                            <option value="<?php echo $event['id']; ?>"><?php echo $event['nama_event']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <h3 style="font-size:larger;">Pilih Kandidat :</h3>

                                <div class="mb-3 kandidat-container" id="kandidat-container" hidden>
                                    <?php foreach ($Kandidat_event as $item) : ?>
                                        <div class="form-check kandidat-item" data-id-kategori-event-vote="<?php echo $item['id_kategori_event_vote']; ?>" require>
    										<input class="form-check-input" type="radio" name="id_kandidat" value="<?php echo $item['id']; ?>" id="kandidat<?php echo $item['id']; ?>">
											<p><?php echo $item['nama']; ?></p>
											<img src="<?php echo base_url('foto_kandidat/' . $item['foto_kandidat']); ?>" width="100" height="100" alt="<?php echo $item['nama']; ?>">
											<p>Visi Misi: <?php echo $item['visi_misi']; ?></p>
										</div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn">Vote</button>
                                </div>
								
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('id_event_vote').addEventListener('change', function () {
    var kandidatContainer = document.getElementById('kandidat-container');

    var selectedValue = this.value;
    var kandidatItems = document.querySelectorAll('.kandidat-item');
    
    if(selectedValue === '') {
        kandidatContainer.setAttribute('hidden', true);
    } else {
        kandidatContainer.removeAttribute('hidden');
        kandidatItems.forEach(function (item) {
            var idKategoriEventVote = item.dataset.idKategoriEventVote;
            if (idKategoriEventVote !== selectedValue) {
                item.style.display = 'none';
            } else {
                item.style.display = 'block';
            }
        });
    }
});

</script> -->
</body>
</html>
