
<!DOCTYPE html>
<html>
    <head>
        <title>Develop By Andi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="<?php echo base_url() ?>assets/css/styles.css" rel="stylesheet">
    </head>
    <body class="login-bg">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Logo -->
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-wrapper">
                        <div class="box">
                            <div class="content-wrap">
                               <?php
                            if ($this->session->flashdata('gagal')) {
                                echo "<div class='alert alert-danger'>";
                                echo $this->session->flashdata('gagal');
                                echo "</div>";
                            }
                            ?>
                             
                                
                                <h6>Sign In</h6>
                                <div class="social">
                                    <a class="face_login" href="#">
                                        <span class="face_icon">
                                            <img src="<?php echo base_url() ?>assets/images/facebook.png" alt="fb">
                                        </span>
                                        <span class="text">Sign in with Facebook</span>
                                    </a>
                                    <div class="division">
                                        <hr class="left">
                                        <span>or</span>
                                        <hr class="right">
                                    </div>
                                </div>
                                <?php echo form_open('Login') ?>
                                <?php echo form_input('username', NULL, 'class="form-control" placeholder="username"') ?>
                                <?php echo form_password('password', NULL, 'class="form-control" placeholder="password"') ?>

                                <div class="action">
                                    <button type="submit" name="submit" class="btn btn-primary signup">Login</button>
                                </div>                
                                <?php echo form_close()?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    </body>
</html>