<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="icon" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                Icon</label>
            <?php if (isset($errors['icon'])) {
                echo '<span class="text-red">'.$errors['icon'].'</span>';
            } ?>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="image_existing" value="<?= $data['icon'] ?>" />
            <img src="<?= base_url('upload/sales/meta_tag/').'/'.$data['icon'] ?>" height="150px" width="250px" />
        </div>
        <?php } ?>

    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Name" name="name"
            value="<?= $data ? $data['name'] : '' ?>">
        <?php if (isset($errors['name'])) {
             echo '<span class="text-red">'.$errors['name'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Title" name="title"
            value="<?= $data ? $data['title'] : '' ?>">
        <?php if (isset($errors['title'])) {
             echo '<span class="text-red">'.$errors['title'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Author" name="author"
            value="<?= $data ? $data['author'] : '' ?>">
        <?php if (isset($errors['author'])) {
             echo '<span class="text-red">'.$errors['author'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <textarea class="form-control" placeholder="Description" name="description" rows="5"><?= $data ? $data['description'] : '' ?></textarea>
        <?php if (isset($errors['description'])) {
             echo '<span class="text-red">'.$errors['description'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <textarea class="form-control" placeholder="Keywords" name="keywords" rows="5"><?= $data ? $data['keywords'] : '' ?></textarea>
        <?php if (isset($errors['keywords'])) {
             echo '<span class="text-red">'.$errors['keywords'].'</span>';
        } ?>
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
        <a href="<?= route_to('admin/sales/meta_tag') ?>" class="btn btn-warning btn-block">
            Back
        </a>
    </div>
</div>
<hr>