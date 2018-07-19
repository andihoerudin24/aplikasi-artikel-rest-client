<?php echo form_open_multipart('Kategori/add', 'class="form-horizontal" role="form"') ?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Nama Ktegori</div>
            </div>
            <div class="panel-body">
                <input type="text" name="nama_kategori"  class="form-control">
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-body">
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        <?php echo anchor('Kategori', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>