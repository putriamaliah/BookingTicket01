<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transportation
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer</li>
      </ol>
    </section>
    <button type="button" class="btn btn-block btn-primary">
      <?php echo anchor('admin/form_transportation ','Tambah Data');?>
    </button>

    <!-- Main Content -->

    <div class="col-xs-12">
        <div class="box">
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Code</th>
                <th>Description</th>
                <th>Seat_qty</th>
                <th></th>
                <th></th>
              </tr>
              <?php 
                $no = 1;
                foreach($transportation as $t) {
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $t->code; ?></td>
                <td><?php echo $t->description; ?></td>
                <td><?php echo $t->seat_qty; ?></td>
                <td>
                 <button type="button" class="btn btn-warning btn-sm">
                  <?php echo anchor('admin/form_edit_transportation/'.$t->id,'Edit');?>
                </button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm">
                  <?php echo anchor('crud/delete_transportation/'.$t->id,'Hapus');?>
                </button>
                </td>
              </tr>

                <?php
                  }
                ?>
              </table>
            </div>
          </div>
        </div>
    
  </div>
  <!-- /.content-wrapper -->
  <?php require_once 'v_footeradmin.php' ?>