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

    <title>Kelola Pengguna Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
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
            position: relative; /* Ensure the logout button is positioned correctly */
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

        .logout-button {
            background-color: #000000;
            color: #ffffff;
            text-align: center;
            border-radius: 30px;
            padding: 15px;
            width: 80%;
            position: absolute; /* Position the logout button at the bottom */
            bottom: 30px; /* Distance from the bottom */
        }

        .logout-button i {
            margin-right: 10px;
        }

        .main {
            flex: 1;
 /* Ensure the main content starts after the sidebar */
            padding: 20px;
            background: url('../assets/background.png');
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; /* Adjust to match layout */
        }

        .container {
            background-color: #ffffff;
            border-radius: 30px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #000000;
            font-weight: bold;
            padding-top: 20px;
        }

        .btn-primary {
            background-color: #9FC743;
            border-color: #9FC743;
        }

        .btn-primary:hover {
            background-color: #8AB739;
            border-color: #8AB739;
        }

        .table thead th {
            background-color: #000000;
            color: #ffffff;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9f5e1;
        }

        .table .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .table .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0;
            margin-top: 10px;
            display: inline-block;
            min-width: 30px;
            text-align: center;
            color: white;
            background-color: #5bc0de;
            border-radius: 20px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #31b0d5;
        }

        .dataTables_wrapper .dataTables_length select,
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 20px;
            padding: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo">
            <img src="../assets/logo.png" alt="T-Vote">
        </div>
        <div class="menu">
            <a href="<?php echo base_url('EventVote'); ?>" class="menu-item">Kelola Event Vote</a>
            <a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item">Kelola Pembelian</a>
            <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item active">Kelola Pengguna</a>
            <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Lihat Hasil Voting</a>
            <a href="<?php echo base_url('admin/loginadm'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
        </div>
    </div>

    <div class="main">
        <div class="container mt-5">
            <h2>Kelola Pengguna Admin</h2>
            <a href="<?php echo base_url('admin_user/tambah'); ?>" class="btn btn-primary mb-3">Tambah Pengguna Admin</a>
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
                                <a href="<?php echo base_url('admin_user/hapus/'.$admin_user['id_admin']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#admin_user_table').DataTable();
        });
    </script>
</body>
</html>
