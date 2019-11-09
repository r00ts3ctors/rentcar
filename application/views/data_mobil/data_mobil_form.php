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
        <h2 style="margin-top:0px">Data_mobil <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">IdPemilik <?php echo form_error('idPemilik') ?></label>
            <input type="text" class="form-control" name="idPemilik" id="idPemilik" placeholder="IdPemilik" value="<?php echo $idPemilik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenismobil <?php echo form_error('jenismobil') ?></label>
            <input type="text" class="form-control" name="jenismobil" id="jenismobil" placeholder="Jenismobil" value="<?php echo $jenismobil; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tahun <?php echo form_error('tahun') ?></label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Tramisi <?php echo form_error('tramisi') ?></label>
            <input type="text" class="form-control" name="tramisi" id="tramisi" placeholder="Tramisi" value="<?php echo $tramisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Warna <?php echo form_error('warna') ?></label>
            <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" value="<?php echo $warna; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Luar <?php echo form_error('foto_luar') ?></label>
            <input type="text" class="form-control" name="foto_luar" id="foto_luar" placeholder="Foto Luar" value="<?php echo $foto_luar; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nostnk <?php echo form_error('nostnk') ?></label>
            <input type="text" class="form-control" name="nostnk" id="nostnk" placeholder="Nostnk" value="<?php echo $nostnk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nopolisi <?php echo form_error('nopolisi') ?></label>
            <input type="text" class="form-control" name="nopolisi" id="nopolisi" placeholder="Nopolisi" value="<?php echo $nopolisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Asuransi <?php echo form_error('asuransi') ?></label>
            <input type="text" class="form-control" name="asuransi" id="asuransi" placeholder="Asuransi" value="<?php echo $asuransi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Dalam <?php echo form_error('foto_dalam') ?></label>
            <input type="text" class="form-control" name="foto_dalam" id="foto_dalam" placeholder="Foto Dalam" value="<?php echo $foto_dalam; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Harga Dalam <?php echo form_error('harga_dalam') ?></label>
            <input type="text" class="form-control" name="harga_dalam" id="harga_dalam" placeholder="Harga Dalam" value="<?php echo $harga_dalam; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Harga Sewadalam <?php echo form_error('harga_sewadalam') ?></label>
            <input type="text" class="form-control" name="harga_sewadalam" id="harga_sewadalam" placeholder="Harga Sewadalam" value="<?php echo $harga_sewadalam; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Harga Sewaluar <?php echo form_error('harga_sewaluar') ?></label>
            <input type="text" class="form-control" name="harga_sewaluar" id="harga_sewaluar" placeholder="Harga Sewaluar" value="<?php echo $harga_sewaluar; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Harga Luar <?php echo form_error('harga_luar') ?></label>
            <input type="text" class="form-control" name="harga_luar" id="harga_luar" placeholder="Harga Luar" value="<?php echo $harga_luar; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="ket">Ket <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder="Ket"><?php echo $ket; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('data_mobil') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>