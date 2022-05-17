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
                        <h1 class="h3 mb-2 text-gray-800">Tentang Kami</h1>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <!-- <h6 class="m-0 font-weight-bold text-primary">Data Users</h6> -->

                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>History</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data as $user) : ?>
                                            <tr>
                                                <td><?= $user['judul'] ?></td>
                                                <td><?= $user['deskripsi'] ?></td>
                                                <td><?= $user['sejarah'] ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/aboutUs/edit').'/'.$user['id'] ?>"
                                                        class="btn btn-primary btn-sm">
                                                        Edit
                                                    </a>
                                                    <!-- <button type="button" class="btn btn-primary btn-sm">Delete</button> -->
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