<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">


<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label> Meta Icon</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="meta_icon" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                File</label>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="meta_icon_existing" value="<?= $data['meta_icon'] ?>" />
            <img src="<?= base_url('upload/setting').'/'.$data['meta_icon'] ?>" height="100px" width="100px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label> File Company Profile</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="doc_cp" id="">
            <label class="custom-file-label" for="">Pilih
                File</label>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="doc_cp_existing" value="<?= $data['doc_cp'] ?>" />
            <iframe src="<?= base_url('upload/setting').'/'.$data['doc_cp'] ?>" height="300px" width="150px" ></iframe>
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label> Video</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="video" id="">
            <label class="custom-file-label" for="">Pilih
                Video</label>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="video_existing" value="<?= $data['video'] ?>" />
            <iframe src="<?= base_url('upload/setting').'/'.$data['video'] ?>" height="200px" width="350px"></iframe>
        </div>
        <?php } ?>
    </div>
</div>
<?php if(session()->getFlashdata('errors')) {  ?>
<div class="alert alert-danger">
    <span> <?= session()->getFlashdata('errors')  ?> </span>
</div>
<?php }; ?>
<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>