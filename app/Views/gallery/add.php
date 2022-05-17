<!DOCTYPE html>
<html lang="en">
<?= View('layout/header_top') ?>

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
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="/admin/gallery/save"
                                    enctype="multipart/form-data">
                                    <?= View('gallery/form') ?>
                                </form>
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

</html>

<script>

</script>