<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<?php $errors = session()->getFlashdata('errors'); ?>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username"
            name="username" value="<?= $data ? $data['username'] : '' ?>">
        <?php if (isset($errors['username'])) {
             echo '<span class="text-red">'.$errors['username'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address"
            name="email" value="<?= $data ? $data['email'] : '' ?>">
        <?php if (isset($errors['email'])) {
             echo '<span class="text-red">'.$errors['email'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password"
            name="password">
            <?php if (isset($errors['password'])) {
             echo '<span class="text-red">'.$errors['password'].'</span>';
        } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6">
        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
            placeholder="Repeat Password" name="repeat_password">
            <?php if (isset($errors['repeat_password'])) {
             echo '<span class="text-red">'.$errors['repeat_password'].'</span>';
        } ?>
    </div>
</div>
<?php if (isset($errors['system'])) {
    echo '<span class="text-red">'.$errors['system'].'</span>';
} ?>
<div class="row">
    <div class="col-sm-3 mb-3 mb-sm-0">
        <button class="btn btn-primary btn-user btn-block">
            SAVE
        </button>
    </div>
    <div class="col-sm-3 mb-3 mb-sm-0">
        <a href="<?= route_to('admin/users') ?>" class="btn btn-user btn-warning btn-block">
            BACK
        </a>
    </div>
</div>

<hr>