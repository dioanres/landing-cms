<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; MQL Digital</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin untuk Logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Anda akan keluar dari aplikasi ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= route_to('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Notif Error -->
<div class="modal fade" id="notif-error" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Error!</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"><?= session()->getFlashdata('error'); ?></div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">OK</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>/assets/sb_admin2/vendor1/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/sb_admin2/vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>


<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>/assets/sb_admin2/vendor1/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>/assets/sb_admin2/js/sb-admin-2.min.js"></script>
<script src="<?= base_url() ?>/assets/sb_admin2/vendor1/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/sb_admin2/vendor1/datatables/dataTables.bootstrap4.min.js"></script>

<script>
var notif_error = '<?= session()->getFlashdata('error')?>';
if (notif_error) {
    $('#notif-error').modal('show');
}
CKEDITOR.replace('.ckeditor', {
    height: '200px'
});

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    //$('.show-img-ready').remove();
    $(this).parent().parent().find('.show-img-ready').remove();
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$(document).ready(function() {
    delete_sub();
    $('#add-sub-product').click(function() {
        console.log(23);
        let form =
            '<div class="form-group row"> <div class="col-sm-4 mb-3 mb-sm-0"> <input type="text" class="form-control" placeholder="Nama Sub Produk" name="sub_product_name[]"> </div> <div class="col-sm-2 mb-3 mb-sm-0"> <input type="text" class="form-control" placeholder="Harga" name="sub_product_price[]"> </div> <div class="col-sm-2 mb-3 mb-sm-0"> <button type="button" class="btn btn-danger delete-sub"> x </button> </div> </div>';
        $('#form-sub').append(form);
        delete_sub();
    });
})

function delete_sub()
{
    $('.delete-sub').click(function(){
        $(this).parent().parent().remove();
    });
}
</script>