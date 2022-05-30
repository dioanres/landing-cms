<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Name" name="name"
            value="<?= $data ? $data['name'] : '' ?>">
        <?php if (isset($errors['name'])) {
             echo '<span class="text-red">'.$errors['name'].'</span>';
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