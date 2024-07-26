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

    <title>Tambah Kandidat</title>
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Kandidat</h2>
    <?php echo validation_errors(); ?>
    <?php if(isset($error)) echo $error; ?>
    <form action="<?php echo base_url('KandidatEventVote/tambah'); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id_event_vote" class="form-label">Event Vote:</label>
            <select class="form-select" name="id_event_vote">
                <option value="">Pilih Event Vote</option>
                <?php foreach ($EventVote as $event) : ?>
                    <option value="<?php echo $event['id']; ?>"><?php echo $event['nama_event']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_kandidat" class="form-label">Nama Kandidat:</label>
            <input type="text" class="form-control" name="nama_kandidat" value="<?php echo set_value('nama_kandidat'); ?>">
        </div>
        <div class="mb-3">
            <label for="visi_misi" class="form-label">Visi Misi:</label>
            <input type="text" class="form-control" name="visi_misi" value="<?php echo set_value('visi_misi'); ?>">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto:</label>
            <input type="file" class="form-control" name="foto">
        </div>

        <!-- Anda bisa tambahkan form untuk upload foto kandidat di sini -->
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</body>
</html>