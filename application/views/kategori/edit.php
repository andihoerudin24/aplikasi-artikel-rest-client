<?php echo form_open_multipart('Kategori/edit', 'class="form-horizontal" role="form"');
echo form_hidden('id',$kategori[0]->id);
?>
<div class="row">
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Nama Ktegori</div>
            </div>
            <div class="panel-body">
                <input type="text" name="nama_kategori"  value="<?php echo $kategori[0]->nama_kategori ?>" class="form-control">
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="content-box-large">
            <div class="panel-body">
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <?php echo anchor('Kategori', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>