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
                <h1 class="page-header"><center>PETTY CASH FORM </center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashDokumen_OP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-success">
                        <div class="panel-heading"></div>
                        <div class="panel-body">

                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/simpanDokumen_OP"; ?>">
                                    <?php foreach ($editDokumen_OP as $r) { ?>
                                         <div class="form-group">
                                        <input type="hidden" class="form-control" name="no_transaksidok" value="<?php echo $r->no_transaksi ?>">
                                            <label>No. Transaksi</label><br>
                                            <label><?php echo $r->no_transaksi ?></label> 
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden" class="form-control" name="IMOdok" value="<?php echo $r->IMO ?>">
                                            <label>IMO</label><br>
                                            <label><?php echo $r->IMO ?></label> 
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen 1</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok ?>" name="tgl_dok">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim Dokumen Shipment 1 ke AR</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok_ship_ar ?>" name="tgl_dok_ship_ar">
                                        </div>
                                        <div class="form-group">
                                            <label>Remark Shipment 1</label>
                                            <textarea class="form-control" name="remark_dok"><?php echo $r->remark_dok ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen 2</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok2 ?>" name="tgl_dok2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim Dokumen Shipment 2</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok_ship_ar2 ?>" name="tgl_dok_ship_ar2">
                                        </div>
                                        <div class="form-group">
                                            <label>Remark Shipment 2</label>
                                            <textarea class="form-control" name="remark_dok2"><?php echo $r->remark_dok2 ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen ULI HUB 1</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok_uli ?>" name="tgl_dok_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim Dokumen ULI HUB 1</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_kirim_dok_uli ?>" name="tgl_kirim_dok_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Remark ULI HUB 1</label>
                                            <textarea class="form-control" name="remark_uli"><?php echo $r->remark_uli ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Dokumen ULI HUB 2</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_dok_uli2 ?>" name="tgl_dok_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim Dokumen ULI HUB 2</label>
                                            <input type="date" class="form-control" value="<?php echo $r->tgl_kirim_dok_uli2 ?>" name="tgl_kirim_dok_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Remark ULI HUB 2</label>
                                            <textarea class="form-control" name="remark_uli2"><?php echo $r->remark_uli2 ?></textarea>
                                        </div>
                                        
                                    <?php } ?>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                </div>
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
