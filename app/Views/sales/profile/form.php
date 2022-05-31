<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Nama" name="name"
            value="<?= $data ? $data['name'] : '' ?>">
        <?php if (isset($errors['name'])) {
             echo '<span class="text-red">'.$errors['name'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                Photo</label>
            <?php if (isset($errors['photo'])) {
                echo '<span class="text-red">'.$errors['photo'].'</span>';
            } ?>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="image_existing" value="<?= $data['photo'] ?>" />
            <img src="<?= base_url('upload/sales/profile/').'/'.$data['photo'] ?>" height="150px" width="250px" />
        </div>
        <?php } ?>

    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="logo" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">Pilih
                Logo</label>
            <?php if (isset($errors['logo'])) {
                echo '<span class="text-red">'.$errors['logo'].'</span>';
            } ?>
        </div>
        <?php if($data != null) { ?>
        <div class="show-img-ready">
            <input type="hidden" name="logo_existing" value="<?= $data['logo'] ?>" />
            <img src="<?= base_url('upload/sales/profile/').'/'.$data['logo'] ?>" height="150px" width="250px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Pekerjaan" name="job"
            value="<?= $data ? $data['job'] : '' ?>">
        <?php if (isset($errors['job'])) {
             echo '<span class="text-red">'.$errors['job'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Motto" name="motto"
            value="<?= $data ? $data['motto'] : '' ?>">
        <?php if (isset($errors['motto'])) {
             echo '<span class="text-red">'.$errors['motto'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control" placeholder="Alamat" name="address"
            rows="5"><?= $data ? $data['address'] : '' ?></textarea>
        <?php if (isset($errors['address'])) {
             echo '<span class="text-red">'.$errors['address'].'</span>';
        } ?>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
            </div>
            <input type="text" name="phone" value="<?= $data ? $data['phone'] : '' ?>" class="form-control" placeholder="No HP / Telpon"
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id=""><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="email" value="<?= isset($socmed->email) ? $socmed->email : '' ?>" class="form-control" placeholder="Email" aria-label=""
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fab fa-whatsapp"></i></span>
            </div>
            <input type="text" name="whatsapp" value="<?= isset($socmed->whatsapp) ? $socmed->whatsapp : '' ?>" class="form-control" placeholder="No Whatsapp" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id=""><i class="fas fa-comment-dots"></i></span>
            </div>
            <input type="text" name="text_whatsapp" value="<?= isset($socmed->text_whatsapp) ? $socmed->text_whatsapp : '' ?>" class="form-control" placeholder="Text Whatsapp" aria-label=""
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
            </div>
            <input type="text" name="instagram" value="<?= isset($socmed->instagram) ? $socmed->instagram : '' ?>" class="form-control" placeholder="Instagram" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fab fa-youtube"></i></span>
            </div>
            <input type="text" name="youtube" value="<?= isset($socmed->youtube) ? $socmed->youtube : '' ?>" class="form-control" placeholder="Youtube" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
    </div>
</div>

<?php if (isset($errors['system'])) {
    echo '<span class="text-red">'.$errors['system'].'</span>';
} ?>
<div class="row">
    <div class="col-sm-3 mb-3 mb-sm-0">
        <button class="btn btn-success btn-block">
            Save
        </button>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
        <a href="<?= route_to('admin/sales/product') ?>" class="btn btn-warning btn-block">
            Back
        </a>
    </div>
</div>
<hr>