<input type="hidden" name="id" value="<?= $data ? $data['id'] : '' ?>">
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label for="sel1">Pilih Company:</label>
        <select class="form-control" name="id_company">
            <?php foreach($companies as $company): ?>
            <option value="<?= $company['id'] ?>" <?= $data != null && $data['id_company'] == $company['id'] ? 'selected' : '' ?>><?= $company['nama_perusahaan'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control" id="" placeholder="Title"
            name="title" value="<?= $data ? $data['title'] : '' ?>">
    </div>
</div>
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
            <img src="<?= base_url('upload/gallery').'/'.$data['image'] ?>" height="100px" width="100px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>