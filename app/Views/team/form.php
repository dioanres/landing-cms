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
        <input type="text" class="form-control" id="exampleFirstName" placeholder="Nama Pimpinan"
            name="nama" value="<?= $data ? $data['nama'] : '' ?>">
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Pilih
                Photo</label>
        </div>
        <?php if($data != null) {?>
        <div class="show-img-ready">
            <input type="hidden" name="foto_existing" value="<?= $data['foto'] ?>" />
            <img src="<?= base_url('upload/foto').'/'.$data['foto'] ?>" height="100px" width="100px" />
        </div>
        <?php } ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <input type="text" class="form-control" placeholder="Jabatan"
            name="jabatan" value="<?= $data ? $data['jabatan'] : '' ?>">
    </div>
</div>
<div class="col-sm-6 mb-3 mb-sm-0">
    <button class="btn btn-primary btn-block">
        SAVE
    </button>
</div>
<hr>