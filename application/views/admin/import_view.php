<!DOCTYPE html>
<html>
<head>
    <title>Import Data Pemilih</title>
</head>
<body>
    <h2>Form Import Pemilih</h2>

    <?php if($this->session->flashdata('success')): ?>
        <p style="color:green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if($this->session->flashdata('error')): ?>
        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data" action="<?php echo site_url('import/upload'); ?>">
        <label>Pilih File Excel (.xls / .xlsx):</label><br>
        <input type="file" name="file" required><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
