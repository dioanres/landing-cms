<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
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
            <img src="<?= base_url('upload/sales/customer/').'/'.$data['image'] ?>" height="150px" width="250px" />
        </div>
        <?php } ?>

    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Notes" name="notes"
            value="<?= $data ? $data['notes'] : '' ?>">
        <?php if (isset($errors['notes'])) {
             echo '<span class="text-red">'.$errors['notes'].'</span>';
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
        <a href="<?= route_to('admin/sales/customer') ?>" class="btn btn-warning btn-block">
            Back
        </a>
    </div>
</div>
<hr>