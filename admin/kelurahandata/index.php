<!DOCTYPE html>
<html lang="en">
<?php 
include_once('../included/meta.php');
require_once('../dbkoneksi.php'); 
?>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('../included/header.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('../included/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <main class="content-wrapper dark-mode">
            <div class="content-header">
                <div class="container-fluid p-2">
                    <!-- nav top right -->
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Kelola Kelurahan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="../index.php">Admin</a></li>
                                <li class="breadcrumb-item active ">Kelurahan</li>
                            </ol>
                        </div>
                    </div>
                    <!-- end nav top right -->
                    <!-- table -->
                    <div class="row mb-2">
                        <div class="col-12 pt-5">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive custom-table-responsive">
                                        <table class="table custom-table">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Kelurahan</th>
                                                    <th>Kecamatan ID</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $sql = "SELECT * FROM kelurahan";
                                                $stmt = $dbh->prepare($sql);
                                                $stmt->execute();
                                                $result = $stmt->fetchAll();
                                                foreach ($result as $row) { ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row['nama'] ?></td>
                                                        <td><?= $row['kecamatan'] ?></td>
                                                        <td>
                                                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-info">Edit</a>
                                                            <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-info mb-3 ml-3"><a href="tambah.php" class="text-white">Tambah</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- last table -->
                </div>
            </div>
        </main>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

</body>
</html>
