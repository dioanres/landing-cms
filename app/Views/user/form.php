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
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
                            </div>
                            <div class="card-body">
                                <form class="user" method="post" action="/admin/users/register">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="Username" name="username" value="<?= $data ? $data['username'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" placeholder="Email Address" name="email" value="<?= $data ? $data['email'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password" name="repeat_password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <button class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </button>
                                    </div>
                                    <hr>
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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
<?= View('layout/footer') ?>

</html>