

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

    <title>Pertanyaan Konfirmasi Keamanan</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Pertanyaan Konfirmasi Keamanan</h2>
                        <?php echo validation_errors(); ?>
                        <?php if(isset($error)) echo $error; ?>
                        <?php echo form_open('auth/pertanyaan'); ?>
                            <div class="mb-3">
                                <label for="jawaban" class="form-label"><?php echo $this->session->userdata('pertanyaan'); ?>?</label>
                                <input type="text" name="jawaban" class="form-control" value="<?php echo set_value('jawaban'); ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>