<?php $this->load->view('template/header'); ?>
  <body class="">
    <div class="page">
      <div class="page-main">
        <?php
        $this->load->view('template/headermenu');
        $this->load->view($menu);

        ?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title"> <?= $title ?> </h1>
            </div>
          <?php $this->load->view($konten); ?>
          </div>
        </div>
      </div>
      <?php $this->load->view('template/footer');  ?>
    </div>


  </body>
  </html>
