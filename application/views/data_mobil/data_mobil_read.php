<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Data_mobil Read</h2>
        <table class="table">
	    <tr><td>IdPemilik</td><td><?php echo $idPemilik; ?></td></tr>
	    <tr><td>Jenismobil</td><td><?php echo $jenismobil; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Tramisi</td><td><?php echo $tramisi; ?></td></tr>
	    <tr><td>Warna</td><td><?php echo $warna; ?></td></tr>
	    <tr><td>Foto Luar</td><td><?php echo $foto_luar; ?></td></tr>
	    <tr><td>Nostnk</td><td><?php echo $nostnk; ?></td></tr>
	    <tr><td>Nopolisi</td><td><?php echo $nopolisi; ?></td></tr>
	    <tr><td>Asuransi</td><td><?php echo $asuransi; ?></td></tr>
	    <tr><td>Foto Dalam</td><td><?php echo $foto_dalam; ?></td></tr>
	    <tr><td>Harga Dalam</td><td><?php echo $harga_dalam; ?></td></tr>
	    <tr><td>Harga Sewadalam</td><td><?php echo $harga_sewadalam; ?></td></tr>
	    <tr><td>Harga Sewaluar</td><td><?php echo $harga_sewaluar; ?></td></tr>
	    <tr><td>Harga Luar</td><td><?php echo $harga_luar; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('data_mobil') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>