<?php echo form_open_multipart('Blog/add', 'class="form-horizontal" role="form"') ?>

<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Judul Artikel</div>
            </div>
            <div class="panel-body">
                <input type="text"  required="" name="judul"  class="form-control">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Masukan Gambar</div>
            </div>
            <div class="panel-body">
                <input type="file" name="userfile" class="form-control">

            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Pilih Kategori Artikel</div>
            </div>
            <div class="panel-body">
                
                <select name="id_kategori" class="form-control">
                    <?php foreach ($kategori as $row): ?>
                        <option value="<?php echo $row->id ?>"><?php echo $row->nama_kategori ?></option>
                    <?php endforeach; ?>
                </select>
            
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Tulis Blog Di Bawah Ini</div>

            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Artikel</label>
                    <div class="col-sm-10">
                        <textarea  name="isi_post"  id="editor" ></textarea>

                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        <?php echo anchor('Blog', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>