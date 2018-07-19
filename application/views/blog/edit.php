<?php
echo form_open_multipart('Blog/edit', 'class="form-horizontal" role="form"');
echo form_hidden('id_post', $blog[0]->id_post);
?>

<div class="row">
    
    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Judul Artikel</div>
            </div>
            <div class="panel-body">
                <input type="text"  name="judul" value="<?php echo $blog[0]->judul; ?>" class="form-control">

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Masukan Gambar</div>
            </div>
            <div class="panel-body">
                <input type="file"  name="userfile" class="form-control">

            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="content-box-large">

            <div class="panel-heading">
                <div class="panel-title">Pilih Kategori</div>

                <div class="panel-options">
                    <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <select name="id_kategori" class="form-control">
                    <?php
                    foreach ($kategori as $row) {
                        echo "<option value='$row->id'";
                        echo $blog[0]->id_post == $row->id ? 'selected' : '';
                        echo ">$row->nama_kategori</option>";
                    }
                    ?>

                </select>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="content-box-large">
            <div class="panel-heading">
                <div class="panel-title">Edit  Blog Di Bawah Ini</div>

            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Artikel</label>
                    <div class="col-sm-10">
                        <textarea  name="post" id="editor" required=""><?php echo $blog[0]->isi_post; ?> </textarea>

                    </div>
                </div>
                <div class="form-group"> 
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button> 
                        <?php echo anchor('Blog', 'Kembali', array('class' => 'btn btn-success btn-sm"')) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>