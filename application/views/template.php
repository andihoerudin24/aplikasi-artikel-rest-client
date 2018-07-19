
<!DOCTYPE html>
<html>
    <head>
        <title>Develop By Andi Hoerudin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="#">Selamat Datang</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Search</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?><b class="caret"></b></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                            <li><a href="<?php echo site_url('Blog') ?>"><i class="glyphicon glyphicon-pencil"></i>Artikel</a></li>
                            <li><a href="<?php echo site_url('Kategori') ?>"><i class="glyphicon glyphicon-tasks"></i>Kategori</a></li>
                            <li><a href="<?php echo site_url('Dashboard/Logout') ?>"><i class="glyphicon glyphicon-log-out"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10">
                    <?php echo $contents; ?>
                </div>
            </div>
        </div>
   

        <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

        <script src="<?php echo base_url() ?>assets/js/ckeditor.js"></script>
          <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
   
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


        <script>
            ClassicEditor
                    .create(document.querySelector('#editor'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
        </script>
        <script type="text/javascript">
        
            $(document).ready(function () {
                $('#myTable').DataTable();
            });
        </script>
    </body>
</html>