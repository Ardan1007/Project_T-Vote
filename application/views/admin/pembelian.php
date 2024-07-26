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

    <title>Kelola Pembelian</title>
</head>
<body>

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
                        <img src="<?php echo base_url('/uploads/'.$p['bukti_pembayaran']); ?>" alt="Bukti Pembayaran" width="100">
                    </td>
                    <td><?php echo $p['status_validasi']; ?></td>
                    <td>
                        <?php if ($p['status_validasi'] != 1): ?>
                            <a href="<?php echo base_url('admin/validasi_pembayaran/'.$p['id_pembelian']); ?>" class="btn btn-primary">Validasi Pembayaran</a>
                        <?php endif; ?>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#pembelian_table').DataTable();
    });
</script>
</body>
</html>