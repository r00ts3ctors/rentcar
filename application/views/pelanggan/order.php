<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis</th>
                                <th>Warna</th>
                                <th>Tahun</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;foreach ($datamobil as $key): ?>
                            <tr>
                                <td class="text-center"><?=$no++ ?></td>
                                <td><?=$key['jenismobil'] ?></td>
                                <td><?=$key['warna'] ?></td>
                                <td class="text-center"><?=$key['tahun'] ?></td>
                                <td class="text-center"><a href="<?= base_url('order/'.$key['id']) ?>" class="btn btn-sm btn-primary">Order</a></td>
                            </tr>
                          <?php endforeach; ?>



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
