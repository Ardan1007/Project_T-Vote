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

    <title>Hasil Voting</title>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Hasil Voting</h2>
    <table class="table table-responsive" id=table_hsl>
        <thead>
            <tr>
                <th scope="col">ID Kandidat</th>
                <th scope="col">Jumlah Suara</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($votes as $vote): ?>
                <tr>
                    <td><?php echo $vote['id_kandidat']; ?></td>
                    <td><?php echo $vote['total_suara']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#table_hsl').DataTable();
        });
    </script>
</div>
</body>
</html>
