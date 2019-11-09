<div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4 text-center">
          <div style="margin-top: 8px" id="message">
              <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
          </div>
      </div>
      <div class="col-md-1 text-right">
      </div>
      <div class="col-md-3 text-right">
          <form action="<?php echo site_url('listmobil'); ?>" class="form-inline" method="get">
              <div class="input-group">
                  <input type="text" class="form-control" name="q" placeholder="Cari Mobil" value="<?php echo $q; ?>">
                  <span class="input-group-btn">
                      <?php
                          if ($q <> '')
                          {
                              ?>
                              <a href="<?php echo site_url('listmobil'); ?>" class="btn btn-default">Reset</a>
                              <?php
                          }
                      ?>
                    <button class="btn btn-primary" type="submit">Search</button>
                  </span>
              </div>
          </form>
      </div>

  <table class="table table-bordered table-hover" style="margin-bottom: 10px">
    <thead>
      <tr>
      <th><strong class=" text-center text-danger"><h4>No.</h4></strong></th>
        <th><strong class=" text-center text-danger"><h4>Jenis mobil</h4></strong></th>
        <th><strong class=" text-center text-danger"><h4>Tahun</h4></strong></th>
        <th><strong class=" text-center text-danger"><h4>Dalam Kota</h4></strong></th>
          <th><strong class=" text-center text-danger"><h4>Luar Kota </h4></strong></th>
        <th><strong class=" text-center text-danger"><h4>Action </h4></strong></th>
      </tr>
    </thead>
    <tbody>

                <?php foreach ($data_mobil_data as $data_mobil) { ?>
                      <tr>
            <td class="text-center"><?php echo ++$start ?>.</td>
            <td><?php echo $data_mobil->jenismobil ?></td>
            <td><?php echo $data_mobil->tahun ?></td>
            <td><?php echo "IDR. " . number_format($data_mobil->harga_sewadalam) ?></td>
            <td><?php echo "IDR. " . number_format($data_mobil->harga_sewaluar) ?></td>
            <td style="text-align:center" width="200px">

              <?php
              echo anchor(base_url('data_mobil/read/'.$data_mobil->id),'<span class="btn btn-sm btn-warning">Detail</span>');
              echo '  ';
              echo anchor(base_url('ordermobil/'.$data_mobil->id),'<span class="btn btn-sm btn-primary">Order</span>');
              ?>
            </td>
          </tr>
                      <?php } ?>
    </tbody>
  </table>
  <div class="row">

      <div class="col-md-12 text-right">
          <?php echo $pagination ?>
      </div>
  </div>

</div>
