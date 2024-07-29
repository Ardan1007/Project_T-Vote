<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <title>Kelola Pembelian Token</title>
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
        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #F5F7F8;
            border-radius: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            width: 80%;
        }
        h2 {
            color: #000000;
            font-weight: bold;
            padding-top: 20px;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        table th {
            background-color: #f2f2f2;
        }
        table img {
            max-width: 100px;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #5bc0de;
            border: none;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #31b0d5;
        }
        .btn-danger {
            background-color: #d9534f;
            border: none;
            padding: 10px 20px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-danger:hover {
            background-color: #c9302c;
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
        .dataTables_wrapper .dataTables_length select {
            border-radius: 20px;
            padding: 5px;
            border: 1px solid #ddd;
        }
        .dataTables_wrapper .dataTables_filter input {
            border-radius: 20px;
            padding: 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<div class="main">
    <div class="sidebar">
        <div class="logo">
            <img src="<?php echo base_url('assets/logo.png'); ?>" alt="T-Vote">
        </div>
        <div class="menu">
            <a href="<?php echo base_url('EventVote'); ?>" class="menu-item">Kelola Event Vote</a>
            <a href="<?php echo base_url('admin/pembelian'); ?>" class="menu-item active">Kelola Pembelian</a>
            <a href="<?php echo base_url('admin/admin_user'); ?>" class="menu-item">Kelola Pengguna</a>
            <a href="<?php echo base_url('admin/hasil_voting'); ?>" class="menu-item">Lihat Hasil Voting</a>
        </div>
        <a href="<?php echo base_url('admin/loginadm'); ?>" class="menu-item logout-button"><i class="mdi mdi-logout" style="margin-right: 10px;"></i>Keluar</a>
    </div>
    <div class="container mt-5">
        <h2>Kelola Pembelian</h2>
        <table id="pembelian_table" class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Jumlah Token</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pembelian as $key => $p): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $p['id_user']; ?></td>
                        <td><?php echo $p['jumlah_token']; ?></td>
                        <td><?php echo $p['nominal_uang']; ?></td>
                        <td>
                            <a href="<?php echo base_url('/uploads/'.$p['bukti_pembayaran']); ?>" data-lightbox="image-<?php echo $key; ?>">
                                <img src="<?php echo base_url('/uploads/'.$p['bukti_pembayaran']); ?>" alt="Bukti Pembayaran">
                            </a>
                        </td>
                        <td><?php echo $p['status_validasi'] ? 'Tervalidasi' : '-'; ?></td>
                        <td>
                            <?php if ($p['status_validasi'] != 1): ?>
                                <a href="<?php echo base_url('admin/validasi_pembayaran/'.$p['id_pembelian']); ?>" class="btn btn-primary">Validasi</a>
                                <a href="<?php echo base_url('admin/hapus_pembelian/'.$p['id_pembelian']); ?>" class="btn btn-danger">Hapus</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#pembelian_table').DataTable({
            "pageLength": 10,
            "lengthChange": true,
            "lengthMenu": [10, 25, 50, 75, 100],
            "language": {
                "paginate": {
                    "previous": "&lt;",
                    "next": "&gt;"
                },
                "search": "Search:",
                "lengthMenu": "Tampilkan _MENU_ per halaman"
            }
        });
    });
</script>
</body>
</html>
