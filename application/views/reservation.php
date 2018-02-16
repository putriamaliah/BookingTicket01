<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reservation
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reservation</li>
      </ol>
    </section>
    <button type="button" class="btn btn-block btn-primary">
      <?php echo anchor('admin/form_reservation','Tambah Data');?>
    </button>

    <!-- Main Content -->

    <div class="col-xs-12">
        <div class="box">
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Reservation Code</th>
                <th>Reservation At</th>
                <th>Reservation Date</th>
                <th>Customer ID</th>
                <th>Seat Code</th>
                <th>Rute ID</th>
                <th>Depart At</th>
                <th>Price</th>
              </tr>
              <?php 
                $no = 1;
                foreach($reservation as $r) {
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $r->reservation_code ?></td>
                <td><?php echo $r->reservation_at ?></td>
                <td><?php echo $r->reservation_date ?></td>
                <td><?php echo $r->customerid ?></td>
                <td><?php echo $r->seat_code ?></td>
                <td><?php echo $r->ruteid ?></td>
                <td><?php echo $r->depart_at ?></td>
                <td><?php echo $r->price ?></td>
                <td>
                <button type="button" class="btn btn-warning btn-sm">
                  <?php echo anchor('admin/form_edit_rute/'.$r->id,'Edit');?>
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                  <?php echo anchor('crud/delete/'.$r->id,'Hapus');?>
                </button>
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