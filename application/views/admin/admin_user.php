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

    <title>Kelola Admin</title>

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
		.btn-tambah {
			background-color: #000000;
            color: #ffffff;
            border-radius: 30px;
				
            padding: 10px 50px;
            font-size: 18px;
            font-weight: bold;
			text-decoration: none;
			
		}
		.btn-tambah:hover {
            background-color: #000000;
            color: #9FC743;
			text-decoration: none; 
        }
		.btn-danger {
			text-decoration: none; 
			padding: 10px 20px; 
			color: white; 
			border-radius: 5px; 
			display: inline-block; 
			margin-right: 10px; 
			border-radius: 25px;
		}

		.btn-danger {
			background-color: #dc3545; 
		}

		.btn-danger:hover {
			background-color: #c82333; 
			text-decoration: none; 
		}

		.container {
			margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 70%;
			height: auto;
		}
		table {
            width: 100%;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 12px;
            
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
            <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item active" class="menu-item">Kelola Pengguna</a>
            <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Hasil Voting</a>

            <!-- <a class="menu-item2">Token : <?php echo $jumlah_token; ?></a> -->
        </div>
        <a href="<?php echo base_url('auth/login_admin'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
    </div>

<div class="container mt-5">
    <h2 style="font-weight: bold;">Kelola Admin</h2>
    
    <table id="admin_user_table" class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($admin_users as $admin_user): ?>
                <tr>
                    <td><?php echo $admin_user['id_admin']; ?></td>
                    <td><?php echo isset($admin_user['username_adm']) ? $admin_user['username_adm'] : 'Username tidak ditemukan'; ?></td>
                    <td><?php echo $admin_user['password']; ?></td>
                    <td>
                        <a href="<?php echo base_url('admin_user/hapus/'.$admin_user['id_admin']); ?>" class="btn-hapus btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<a href="<?php echo base_url('admin_user/tambah'); ?>" class="btn-tambah">Tambah Admin</a>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#admin_user_table').DataTable();
    });
</script>
</body>
</html>
