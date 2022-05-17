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
        <label for="sel1">Visi:</label>
        <textarea class="form-control ckeditor" name="deskripsi" rows="5"><?= $data ? $data['deskripsi'] : '' ?></textarea>
    </div>
</div>
<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>