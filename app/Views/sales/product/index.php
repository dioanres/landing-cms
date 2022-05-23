<!DOCTYPE html>
<html lang="en">

<head>
    <?= View('layout/header_top') ?>
    <title><?= $title ?></title>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?= View('layout/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?= View('layout/header') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <div style="float:right">
                                            <a href="<?= route_to('admin/sales/product/add') ?>"
                                                class="btn btn-primary btn-circle">
                                                <i class="fas fa-plus"></i>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $user) : ?>
                                                    <tr>
                                                        <td><?= $user['name'] ?></td>
                                                        <td><img src="<?php echo base_url('upload/sales/product').'/'.$user['image'] ?>"
                                                                widht="400px" height="200px" /></td>
                                                        <td><?= $user['desc'] ?></td>
                                                        <td><?= $user['price'] ?></td>
                                                        <td>
                                                            <a href="<?= base_url('admin/sales/product/edit').'/'.$user['id'] ?>"
                                                                class="btn btn-primary btn-sm">

                                                                Edit
                                                            </a>
                                                            <a href="<?= base_url('admin/sales/product/delete').'/'.$user['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.container-fluid -->

                    <!-- Page Heading -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?= View('layout/footer') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


</body>

<script>
// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>

</html>