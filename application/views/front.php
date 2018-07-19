<?php $this->load->view('layouts/header') ?>
<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
        <?php foreach ($blog as $row): ?>
        <h3 class="pb-3 mb-4 font-italic border-bottom">
            <center><img src="<?php echo base_url()?>uploads/foto/<?php echo $row->foto ?>" class="img-responsive" height="300" width="250"></center>
            </h3>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $row->judul ?></h2>
                <p class="blog-post-meta"><?php echo $row->tanggal ?> <a href="#">Andi Hoerudin</a></p>
                <?php echo $row->isi_post ?>
            </div><!-- /.blog-post -->
<?php endforeach; ?>
            

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic"></h4>
                <p class="mb-0"><em></em></p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <?php foreach ($kategori as $row): ?>
                    <li>
                        <?php echo anchor('Welcome/detail/'.$row->id,$row->nama_kategori) ?>
                  </li>
                    <?php endforeach; ?>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="https://github.com/andihoerudin24">GitHub</a></li>
                    <li><a href="https://github.com/andihoerudin24">Twitter</a></li>
                    <li><a href="https://web.facebook.com/andi.hoerudin.5">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
<?php $this->load->view('layouts/footer') ?>

