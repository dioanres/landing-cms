<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Nama Produk" name="name"
            value="<?= $data ? $data['name'] : '' ?>">
        <?php if (isset($errors['name'])) {
             echo '<span class="text-red">'.$errors['name'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                Image</label>
            <?php if (isset($errors['image'])) {
                echo '<span class="text-red">'.$errors['image'].'</span>';
            } ?>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="image_existing" value="<?= $data['image'] ?>" />
            <img src="<?= base_url('upload/sales/product/').'/'.$data['image'] ?>" height="150px" width="250px" />
        </div>
        <?php } ?>

    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea class="form-control ckeditor" name="desc" rows="5"><?= $data ? $data['desc'] : '' ?></textarea>
        <?php if (isset($errors['desc'])) {
             echo '<span class="text-red">'.$errors['desc'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Harga" name="price"
            value="<?= $data ? $data['price'] : '' ?>">
        <?php if (isset($errors['price'])) {
             echo '<span class="text-red">'.$errors['price'].'</span>';
        } ?>
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