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
            width: 380px;
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
            background: url('./assets/background.png');
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

        .btn-primary, .btn-danger {
            text-decoration: none; 
            padding: 5px 20px; 
            color: white; 
            border-radius: 20px; 
            display: inline-block; 
            margin-right: 10px; 
        }

        .btn-primary {
            background-color: #007bff; 
        }

        .btn-primary:hover {
            background-color: #0056b3; 
            text-decoration: none; 
        }

        .btn-danger {
            background-color: #dc3545; 
        }

        .btn-danger:hover {
            background-color: #c82333; 
            text-decoration: none; 
        }

        .btn-tambah {
    background-color: #000000;
    color: #ffffff;
    text-decoration: none;
    border-radius: 30px;
    padding: 10px 30px; /* Mengurangi padding jika terlalu besar */
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
    display: inline-block; /* Pastikan tampil sebagai blok dalam satu baris */
    text-align: center;
}

.btn-tambah:hover {
    background-color: #000000;
    color: #9FC743;
    text-decoration: none; 
}

        .event-management {
            display: flex;
			margin-left: 80px;
			margin-top: 30px;
			margin-bottom: 30px;
         
        }

        .event-option {
            background-color: white;
			color: #000000;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
			margin-left: 10px;
			margin-right: 10px;
            padding: 20px;
            transition: transform 0.3s;
			text-decoration: none; 
        }

        .event-option:hover {
            background-color: #000000;
    color: #9FC743;
    text-decoration: none; 
        }

        

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .table-responsive {
            max-height: 400px;
            
            overflow-y: auto;
        }
        /* .table thead th {
            background-color: #000000;
            width: 200px;
            color: #ffffff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9f5e1;
        } */
        
        .section {
    opacity: 0;
    height: 0;
    overflow: hidden;
    transition: opacity 0.5s, height 0.5s;
}

.section.active {
    opacity: 1;
    height: auto;
    overflow: visible; /* Pastikan ini terlihat */
}
.btn-group {
    display: flex;
    gap: 10px; /* Atur jarak antara tombol */
}

.container-tabel {
    margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 90%;
			height: auto;
}

.judul {
	margin-left: 85px;
	margin-bottom: 10px;
}
    </style>
    <title>Event Management</title>
</head>
<body>
    <div class="main">
        <div class="sidebar">
            <div class="logo">
                <img src="./assets/logo.png" alt="T-Vote">
            </div>
            <div class="menu">
                <a href="<?php echo base_url('EventVote'); ?>" class="menu-item active">Kelola Event Vote</a>
                <a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item">Kelola Pembelian</a>
                <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item">Kelola Pengguna</a>
                <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Hasil Voting</a>
            </div>
            <a href="<?php echo base_url('auth/login_admin'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
        </div>

        <div class="container">
			<div class="judul">
                <h2 style="font-weight: bold;">Kelola Event</h2>
            </div>
            <div class="event-management">
                <div >
                    <a href="#" id="show-event-vote" class="event-option" style="font-weight: bold;">Daftar Event Vote</a>
                </div>
                <div >
                    <a href="#" id="show-kandidat" class="event-option" style="font-weight: bold;">Daftar Kandidat</a>
                </div>
            </div>

            <div id="daftar-event-vote" class="container mt-5 mb-5 section active">
                <div class="container-tabel" style="margin-left: 60px;">
                <h2 style="font-weight: bold;">Daftar Event Vote</h2>
				<div class="table-responsive">
					<table class="table" id="table-event-vote">
						<thead>
							<tr>
								<th scope="col">Nama Event</th>
								<th scope="col">Deskripsi</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($EventVote as $k): ?>
							<tr>
								<td><?php echo $k['nama_event']; ?></td>
								<td><?php echo $k['deskripsi']; ?></td>
								<td>
									<a href="<?php echo base_url('EventVote/edit/'.$k['id']); ?>" class="btn-edit btn-primary">Ubah</a>
									<a href="<?php echo base_url('EventVote/hapus/'.$k['id']); ?>" class="btn-hapus btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Event Vote ini?')">Hapus</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
                <a href="<?php echo base_url('EventVote/tambah'); ?>" class="btn-tambah">Tambah Event Vote</a>
				</div>
            </div>
            

            <div id="daftar-kandidat" class="container section">
			<div class="container-tabel" style="margin-left: 60px;">
                <h2 style="font-weight: bold;">Daftar Kandidat</h2>
                <div class="table-responsive">
                    <table class="table" id="table-kandidat">
                        <thead>
                            <tr>
                                <th scope="col">ID Kandidat</th>
                                <th scope="col">Foto Kandidat</th>
                                <th scope="col">Nama Kandidat</th>
                                <th scope="col">Nama Event</th>
                                <th scope="col">Visi Misi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php foreach($kandidat as $k): ?>
    <tr>
        <td><?php echo $k['id']; ?></td>
        <td><img src="./foto_kandidat/<?php echo $k['foto_kandidat']; ?>" width="100" height="100" alt=""></td>
        <td><?php echo $k['nama']; ?></td>
        <td><?php echo $k['nama_event']; ?></td>
        <td><?php echo $k['visi_misi']; ?></td>
        <td>
            <div class="btn-group">
                <a href="<?php echo base_url('KandidatEventVote/edit/'.$k['id']); ?>" class="btn-edit btn-primary">Ubah</a>
                <a href="<?php echo base_url('KandidatEventVote/hapus/'.$k['id']); ?>" class="btn-hapus btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kandidat ini?')">Hapus</a>
            </div>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
                    </table>
                    
                </div>
                
                <a href="<?php echo base_url('KandidatEventVote/tambah'); ?>" class="btn-tambah">Tambah Kandidat</a>
                
            </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
    $('#show-event-vote').click(function() {
        $('.section').removeClass('active');
        $('#daftar-event-vote').addClass('active');
    });

    $('#show-kandidat').click(function() {
        $('.section').removeClass('active');
        $('#daftar-kandidat').addClass('active');
    });
});

    </script>
</body>
</html>
