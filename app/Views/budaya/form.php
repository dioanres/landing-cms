<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                Image</label>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="image_existing" value="<?= $data['image'] ?>" />
            <img src="<?= base_url('upload/budaya').'/'.$data['image'] ?>" height="100px" width="100px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" placeholder="Deskripsi"
            name="deskripsi" value="<?= $data ? $data['deskripsi'] : '' ?>">
    </div>
</div>

<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>