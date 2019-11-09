<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="basic-form">
          <form method="post" action="<?= base_url('welcome/validasiOrder') ?>">
            <div class="form-group">
              <input type="text" name="keperluan" class="form-control input-default" placeholder="Kebutuhan Kendaraan">
              <input type="hidden" name="id"  value="<?php echo $this->uri->segment(3) ?>">
            </div>
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                  <input type="text" name="lamasewa" class="form-control input-flat" placeholder="Lama Sewa ex 3">

                </div>
              </div>
              <div class="col-lg-3">
                <div class="form-group">
                  <select class="form-control" name="supir" required>
                    <option value="1"> Pakai Supir </option>
                    <option value="2"> Tanpa Supir </option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <select class="form-control" name="sewa" required >
                    <option value="1"> Dalam Daerah </option>
                    <option value="2"> Luar Daerah </option>
                  </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Proses Order</button>
            <hr>
            <p>Untuk Order Kendaraan lebih dari 1 Kendaraan anda dapat mengulang proses order dan Agen Kami akan melakukan kontak
              kepada anda dengan no 082161677 via phone atau via whatwaap</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
