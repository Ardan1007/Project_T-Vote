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

    <title>Daftar Event Vote</title>
</head>
<body>

<div class="container mt-5 mb-5">
    <h2>Daftar Event Vote</h2>
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
                    <a href="<?php echo base_url('EventVote/edit/'.$k['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('EventVote/hapus/'.$k['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Event Vote ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url('EventVote/tambah'); ?>" class="btn btn-success">Tambah Event Vote</a>
</div>
<div class="container mt-5 mb-5">
</div>
<div class="container mt-5 mb-5">
    <h2>Daftar Kandidat</h2>
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
                <td><img src="./foto_kandidat/<?php echo $k['foto_kandidat']; ?>" width="250" height="300" alt=""></td>
                <td><?php echo $k['nama']; ?></td>
                <td><?php echo $k['nama_event']; ?></td>
                <td><?php echo $k['visi_misi']; ?></td>
                <td>
                    <a href="<?php echo base_url('KandidatEventVote/edit/'.$k['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('KandidatEventVote/hapus/'.$k['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kandidat ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?php echo base_url('KandidatEventVote/tambah'); ?>" class="btn btn-success">Tambah Kandidat</a>
</div>
<script>
    $(document).ready(function() {
        $('#table-event-vote').DataTable();
        $('#table-kandidat').DataTable();
        
    });
</script>
</body>
</html>