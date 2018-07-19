<?php $this->load->view('layouts/header') ?>
        <div class="container">
           
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <?php foreach ($kategori as $r): ?>
                    <a class="p-2 text-muted" href="<?php echo site_url('Welcome/detail/'.$r->id) ?>"><?php echo $r->nama_kategori; ?></a>
                    <?php endforeach; ?>
                </nav>
            </div>
         <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Selamat Membaca</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                    <p class="lead mb-6"><a href="<?php echo site_url('Welcome') ?>" class="text-white font-weight-bold">Lihat Semua Artikel</a></p>
                </div>
            </div>
            <div class="row mb-2">
                 <?php foreach ($blog as $row): ?>
                     <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success"><?php echo $row->judul ?></strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#"></a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto"><?php $isi=$row->isi_post; echo $isi=character_limiter($isi,100); ?></p>
                            <a href="<?php echo site_url('Welcome/read/'.$row->id_post) ?>">Baca Selengkapnya</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-lg-block" width="200" height="150" src="<?php echo base_url() ?>uploads/foto/<?php echo $row->foto ?>" alt="Card image cap">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <?php $this->load->view('layouts/footer') ?>