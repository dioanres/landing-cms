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

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div style="float:right">
                                    <?php if (count($data) < 1) : ?>
                                    <a href="<?= route_to('admin/sales/meta_tag/add') ?>"
                                        class="btn btn-primary btn-circle">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Icon</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Description</th>
                                                <th>Keywords</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $user) : ?>
                                            <tr>

                                                <td><img src="<?php echo base_url('upload/sales/meta_tag').'/'.$user['icon'] ?>"
                                                        widht="200px" height="200px" /></td>
                                                <td><?= $user['title'] ?></td>
                                                <td><?= $user['author'] ?></td>
                                                <td><?= $user['description'] ?></td>
                                                <td><?= $user['keywords'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/sales/meta_tag/edit').'/'.$user['id'] ?>"
                                                        class="btn btn-primary btn-sm">

                                                        Edit
                                                    </a>
                                                    <a href="<?= base_url('admin/sales/meta_tag/delete').'/'.$user['id'] ?>"
                                                        type="button" class="btn btn-danger btn-sm">Delete</a>
                                                </td>

                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
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