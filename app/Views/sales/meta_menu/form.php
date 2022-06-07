<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
<?php //dd($meta); ?>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Home" name="menu[home][home_title]"
            value="<?= isset($meta['menu']['home']['home_title']) ? $meta['menu']['home']['home_title'] : '' ?>">
        <?php if (isset($errors['menu[home][home_title]'])) {
             echo '<span class="text-red">'.$errors['menu[home][home_title]'].'</span>';
        } ?>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea placeholder="Home Description" class="form-control" name="menu[home][home_desc]" rows="5"><?= isset($meta['menu']['home']['home_desc']) ? $meta['menu']['home']['home_desc'] : '' ?></textarea>
        <?php if (isset($errors['menu[home][home_desc]'])) {
             echo '<span class="text-red">'.$errors['menu[home][home_desc]'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Products" name="menu[product][product_title]"
            value="<?= isset($meta['menu']['product']['product_title']) ? $meta['menu']['product']['product_title'] : '' ?>">
        <?php if (isset($errors['menu[product][product_title]'])) {
             echo '<span class="text-red">'.$errors['menu[product][product_title]'].'</span>';
        } ?>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea placeholder="Product Description" class="form-control" name="menu[product][product_desc]" rows="5"><?= isset($meta['menu']['product']['product_desc']) ? $meta['menu']['product']['product_desc'] : '' ?></textarea>
        <?php if (isset($errors['menu[product][product_desc]'])) {
             echo '<span class="text-red">'.$errors['menu[product][product_desc]'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Customer" name="menu[customer][customer_title]"
            value="<?= isset($meta['menu']['customer']['customer_title']) ? $meta['menu']['customer']['customer_title'] : '' ?>">
        <?php if (isset($errors['menu[customer][customer_title]'])) {
             echo '<span class="text-red">'.$errors['menu[customer][customer_title]'].'</span>';
        } ?>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea placeholder="Customer Description" class="form-control" name="menu[customer][customer_desc]" rows="5"><?= isset($meta['menu']['customer']['customer_desc']) ? $meta['menu']['customer']['customer_desc'] : '' ?></textarea>
        <?php if (isset($errors['menu[customer][customer_desc]'])) {
             echo '<span class="text-red">'.$errors['menu[customer][customer_desc]'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Testimonial" name="menu[testimonial][testimonial_title]"
            value="<?= isset($meta['menu']['testimonial']['testimonial_title']) ? $meta['menu']['testimonial']['testimonial_title'] : '' ?>">
        <?php if (isset($errors['menu[testimonial][testimonial_title]'])) {
             echo '<span class="text-red">'.$errors['menu[testimonial][testimonial_title]'].'</span>';
        } ?>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea placeholder="Testimonial Description" class="form-control" name="menu[testimonial][testimonial_desc]" rows="5"><?= isset($meta['menu']['testimonial']['testimonial_desc']) ? $meta['menu']['testimonial']['testimonial_desc'] : '' ?></textarea>
        <?php if (isset($errors['menu[testimonial][testimonial_desc]'])) {
             echo '<span class="text-red">'.$errors['menu[testimonial][testimonial_desc]'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Contact Us" name="menu[contact][contact_title]"
            value="<?= isset($meta['menu']['contact']['contact_title']) ? $meta['menu']['contact']['contact_title'] : '' ?>">
        <?php if (isset($errors['menu[contact][contact_title]'])) {
             echo '<span class="text-red">'.$errors['menu[contact][contact_title]'].'</span>';
        } ?>
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        <textarea placeholder="Contact Description" class="form-control" name="menu[contact][contact_desc]" rows="5"><?= isset($meta['menu']['contact']['contact_desc']) ? $meta['menu']['contact']['contact_desc'] : '' ?></textarea>
        <?php if (isset($errors['menu[contact][contact_desc]'])) {
             echo '<span class="text-red">'.$errors['menu[contact][contact_desc]'].'</span>';
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
        <a href="<?= route_to('admin/sales/meta_menu') ?>" class="btn btn-warning btn-block">
            Back
        </a>
    </div>
</div>
<hr>