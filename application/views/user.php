<?php require_once 'v_headeradmin.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>
    <button type="button" class="btn btn-block btn-primary">
      <?php echo anchor('admin/form','Tambah Data');?>
    </button>

    <!-- Main Content -->

    <div class="col-xs-12">
        <div class="box">
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Full Name</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
              <?php 
                $no = 1;
                foreach($user as $u) {
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->username ?></td>
                <td><?php echo $u->password ?></td>
                <td><?php echo $u->fullname ?></td>
                <td><?php echo $u->level ?></td>
                <td>
                <button type="button" class="btn btn-warning btn-sm">
                  <?php echo anchor('admin/form_edit/'.$u->id,'Edit');?>
                </button>
                <button type="button" class="btn btn-danger btn-sm">
                  <?php echo anchor('crud/delete/'.$u->id,'Hapus');?>
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