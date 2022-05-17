<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Nama Perusahaan</label>
        <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Perusahaan"
            name="nama_perusahaan" value="<?= $data ? $data['nama_perusahaan'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Logo Perusahaan</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="logo" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose
                file</label>
        </div>
        <?php if($data != null)  {?>
        <div class="show-img-ready">
            <input type="hidden" name="logo_existing" value="<?= $data['logo'] ?>" />
            <img src="<?= base_url('upload/logo_ap').'/'.$data['logo'] ?>" height="100px" width="100px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Deskripsi</label>
        <textarea class="form-control ckeditor" name="deskripsi" rows="5"
            id="comment"><?= $data ? $data['deskripsi'] : '' ?></textarea>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Tentang Perusahaan / Tentang Kami</label>
        <textarea class="form-control ckeditor" name="tentang_kami"
            rows="5"><?= $data ? $data['tentang_kami'] : '' ?></textarea>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Sejarah Perusahaan</label>
        <textarea class="form-control ckeditor" name="sejarah_perusahaan"
            rows="5"><?= $data ? $data['sejarah_perusahaan'] : '' ?></textarea>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Alamat</label>
        <textarea class="form-control" name="alamat"
            rows="5"><?= $data ? $data['alamat'] : '' ?></textarea>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">No Telpon</label>
        <input type="text" class="form-control" placeholder="No Telpon"
            name="no_telpon" value="<?= $data ? $data['no_telpon'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">No HP</label>
        <input type="text" class="form-control" placeholder="No Hp"
            name="no_hp" value="<?= $data ? $data['no_hp'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Email</label>
        <input type="text" class="form-control" placeholder="Email"
            name="email" value="<?= $data ? $data['email'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Instagram</label>
        <input type="text" class="form-control" placeholder="Instagram"
            name="medsos_ig" value="<?= $data ? $data['medsos_ig'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Twitter</label>
        <input type="text" class="form-control" placeholder="Twitter"
            name="medsos_twitter" value="<?= $data ? $data['medsos_twitter'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="">Facebook</label>
        <input type="text" class="form-control" placeholder="Facebook"
            name="medsos_facebook" value="<?= $data ? $data['medsos_facebook'] : '' ?>">
    </div>
</div>
<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>