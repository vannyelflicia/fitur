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
                <h1 class="page-header"><center>ACOUNT PAYABLE FORM</center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashAP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">

                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/simpanAP"; ?>">
                                    <?php foreach ($editap as $n) { ?>
                                        <div class="form-group">
                                        <input type="hidden" class="form-control" name="no_transaksiap" value="<?php echo $n->no_transaksi ?>">
                                            <label>No. Transaksi</label><br>
                                            <label><?php echo $n->no_transaksi ?></label> 
                                        </div>
                                   		<div class="form-group">
                                        <input type="hidden" class="form-control" name="IMOap" value="<?php echo $n->IMO ?>">
                                            <label>IMO</label><br>
                                            <label><?php echo $n->IMO ?></label> 
                                        </div>

                                        <div class="form-group">
                                            <label>Name Agen</label>
                                            <select class="form-control" required name="name_ag">
                                            	<option><?php echo $n->name_ag ?></option>
                                                <?php foreach ($name_agen as $ag) { ?>
                                                <option><?php echo $ag->name_agen ?></option>
                                                <?php } ?>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice No. Agen</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_ag ?>" name="inv_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Agen Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_ag_date ?>" name="inv_ag_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_ag ?>" name="tgl_trima_inv_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Agen Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_ag_am?>" name="inv_ag_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Agen Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_ag ?>" name="pay_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Agen</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_ag ?>" name="date_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>No B/L</label>
                                            <input type="text" class="form-control" value="<?php echo $n->no_bl ?>" name="no_bl">
                                        </div>
                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <input type="text" class="form-control" value="<?php echo $n->no_pem ?>" name="no_pem">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. Genset</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_genset ?>" name="inv_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Genset Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_genset_date ?>" name="inv_genset_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_genset ?>" name="tgl_trima_inv_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Genset Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_genset_am?>" name="inv_genset_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Genset</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_genset ?>" name="pay_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Genset</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_genset ?>" name="date_genset">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. Bjti</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_bjti ?>" name="inv_bjti">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Bjti Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_date_bjti ?>" name="inv_date_bjti">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_bjti ?>" name="tgl_trima_inv_bjti">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Bjti Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_bjti_am?>" name="inv_bjti_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Bjti</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_bjti ?>" name="pay_bjti">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Bjti</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_bjti ?>" name="date_bjti">
                                        </div>

                                        <div class="form-group">
                                            <label>Name Ship</label>
                                            <select class="form-control" required name="name_ship" required>
                                                <option><?php echo $n->name_ship ?></option>
                                                <?php foreach ($name_ship as $sh) { ?>
                                                <option><?php echo $sh->name_ship ?></option>
                                                <?php } ?>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice No. Ship</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_ship ?>" name="inv_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Ship Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_ship_date ?>" name="inv_ship_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_ship ?>" name="tgl_trima_inv_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Ship Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_ship_am ?>" name="inv_ship_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Ship</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_ship ?>" name="pay_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Ship</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_ship ?>" name="date_ship">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. THC</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_thc ?>" name="inv_thc">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice THC Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_thc_date ?>" name="inv_thc_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_thc ?>" name="tgl_trima_inv_thc">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice THC Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_thc_am ?>" name="inv_thc_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment THC</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_thc ?>" name="pay_thc">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date THC</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_thc ?>" name="date_thc">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. Plug</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_plug ?>" name="inv_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Plug Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_plug_date ?>" name="inv_plug_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_plug ?>" name="tgl_trima_inv_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Plug Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_plug_am ?>" name="inv_plug_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Plug</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_plug ?>" name="pay_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Plug</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_plug ?>" name="date_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kirim Dokumen Plug ke AR</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_kirim_plug_ar ?>" name="tgl_kirim_plug_ar">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. Buruh</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_buruh ?>" name="inv_buruh">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Buruh Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_buruh_date ?>" name="inv_buruh_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_buruh ?>" name="tgl_trima_inv_buruh">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Buruh Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_buruh_am ?>" name="inv_buruh_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Buruh</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_buruh ?>" name="pay_buruh">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Buruh</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_buruh ?>" name="date_buruh">
                                        </div>

                                        <div class="form-group">
                                            <label>No. Invoice Shiipment ULI HUB 1</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_uli ?>" name="inv_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Invoice Shipment ULI HUB 1</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_inv_uli ?>" name="tgl_inv_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_uli ?>" name="tgl_trima_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment ULI HUB 1 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_uli_am ?>" name="inv_uli_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Shipment ULI HUB 1</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_ship_uli ?>" name="pay_ship_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Shipmet ULI HUB 1</label>
                                            <input type="date" class="form-control" value="<?php echo $n->pay_date_uli ?>" name="pay_date_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Invoice Shiipment ULI HUB 2</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_uli2 ?>" name="inv_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Invoice Shipment ULI HUB 2</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_inv_uli2 ?>" name="tgl_inv_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_uli2 ?>" name="tgl_trima_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Shipment ULI HUB 2 Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_uli_am2 ?>" name="inv_uli_am2">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Shipment ULI HUB 2</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_ship_uli2 ?>" name="pay_ship_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Shipmet ULI HUB 2</label>
                                            <input type="date" class="form-control" value="<?php echo $n->pay_date_uli2 ?>" name="pay_date_uli2">
                                        </div>

                                        <div class="form-group">
                                            <label>Invoice No. Lain</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_lain ?>" name="inv_lain">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Lain Date</label>
                                            <input type="date" class="form-control" value="<?php echo $n->inv_lain_date ?>" name="inv_lain_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Terima Invoice Lain</label>
                                            <input type="date" class="form-control" value="<?php echo $n->tgl_trima_inv_lain ?>" name="tgl_trima_inv_lain">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Lain Amount</label>
                                            <input type="text" class="form-control" value="<?php echo $n->inv_lain_am ?>" name="inv_lain_am">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Lain</label>
                                            <input type="text" class="form-control" value="<?php echo $n->pay_lain ?>" name="pay_lain">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Lain</label>
                                            <input type="date" class="form-control" value="<?php echo $n->date_lain ?>" name="date_lain">
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
