<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Of Activity PT.TBS</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome Back, <?php echo $this->session->userdata('ses_nama');?>! As <?php echo $this->session->userdata('akses');?></a>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <?php $this->load->view('menu');?>

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header"><center>TRUCKING FORM</center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/DashTruck"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-red">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">

                            <div class="row">
                            <!-- <div class="col-md-offset-2">
                                <div class="col-lg-8"> -->
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/simpanTruck"; ?>">
                                        <div class="col-lg-4">  

                                         <?php foreach ($edittruck as $c) { ?>
                                        <input type="hidden" class="form-control" name="no_transaksitr" value="<?php echo $c->no_transaksi ?>">
                                   		 <div class="form-group">
                                         <input type="hidden" class="form-control" value="<?php echo $c->IMO ?>" name="IMOtr">
                                            <label>IMO</label><br>
                                            <label><?php echo $c->IMO ?></label>
                                        </div>
                                        </div>
                                        <div class="col-lg-8">
                                        <div class="col-md-offset-6">
                                        <div class="form-group">
                                            <label>No. Invoice</label>
                                            <input class="form-control" value="<?php echo $c->inv_truck ?>" name="inv_truck">
                                        </div>
                                        </div>
                                        </div>
                                        <center>
                                            <h4 style="font-style: bold" >SPKs</h4>
                                            <h4 style="font-style: bold" >SURAT PERINTAH KERJA (SOPIR)</h4>
                                        </center>
                                        <div class="col-lg-4">
                                            Ditugaskan kepada :
                                        </div>
                                        <br>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" value="<?php echo $c->name ?>" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="date" value="<?php echo $c->date ?>" name="date">
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>No. Polisi</label>
                                            <input class="form-control" value="<?php echo $c->no_pol ?>" name="no_pol">
                                        </div>
                                        <div class="form-group">
                                            <label>Jam</label>
                                            <input class="form-control" value="<?php echo $c->jam ?>" name="jam">
                                        </div>
                                        </div>
                                        <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <input class="form-control" value="<?php echo $c->tujuan ?>" name="tujuan">
                                        </div>
                                        <div class="form-group">
                                            <label>Order</label>
                                            <input class="form-control" value="<?php echo $c->pesanan ?>" name="pesanan">
                                        </div>
                                        </div>
                                        <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Muatan</label>
                                            <input class="form-control" value="<?php echo $c->muatan ?>" name="muatan">
                                        </div>
                                        </div>
                                        <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Ukuran</label>
                                            <input class="form-control" value="<?php echo $c->ukuran ?>" name="ukuran">
                                        </div>
                                        </div>
                                        <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Biaya Jalan</label>
                                            <input class="form-control" value="<?php echo $c->b_jajan ?>" name="b_jajan">
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya Komisi</label>
                                            <input class="form-control" value="<?php echo $c->b_kom ?>" name="b_kom">
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya Kawalan</label>
                                            <input class="form-control" value="<?php echo $c->b_kawal ?>" name="b_kawal">
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya Lain - Lain</label>
                                            <input class="form-control" value="<?php echo $c->b_laintr ?>" name="b_laintr">
                                        </div>
                                        </div>
                                        <?php } ?>
                                        <div class="col-lg-12">
                                        <center>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                        </center>
                                        </div>
                                    </form>
                                <!-- </div>
                                </div> -->
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>

                    
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg- -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
