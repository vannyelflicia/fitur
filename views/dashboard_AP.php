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
<style>
.dtHorizontalExampleWrapper {
  max-width: 600px;
  margin: 0 auto;
}
#dtHorizontalExample th, td {
  white-space: nowrap;
}
</style>
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
                    <h1 class="page-header"><center>CONTROL OF ACTIVITY PT.TBS</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Keterangan Warna : <br>
                            <div class="col-md-5">
                            <br><img src="<?php echo base_url(); ?>assets/image/agen.jpg" width=30px> Agen 
                            <br><img src="<?php echo base_url(); ?>assets/image/genset.jpg" width=30px> Genset
                            <br><img src="<?php echo base_url(); ?>assets/image/bjti.jpg" width=30px> BJTI
                            <br><img src="<?php echo base_url(); ?>assets/image/ship.jpg" width=30px> Ship
                            <br><img src="<?php echo base_url(); ?>assets/image/thc.jpg" width=30px> THC
                            </div>
                            <div class="col-md-7">
                            <br><img src="<?php echo base_url(); ?>assets/image/plugnew.jpg" width=30px> Plug
                            <br><img src="<?php echo base_url(); ?>assets/image/handling.jpg" width=30px> Buruh
                            <br><img src="<?php echo base_url(); ?>assets/image/plug.jpg" width=30px> ULI HUB 1&2
                            <br><img src="<?php echo base_url(); ?>assets/image/lain.jpg" width=30px> Lain
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                <!-- <div class="col-md-offset-11" style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/formAP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>  ADD</button></a>
                </div> -->
                     <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <center>Data AP Tables</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <div class="table-responsive-sm">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No Transaksi</th>
                                        <th>IMO</th>
                                        <th>No. & Size Container</th>
                                        <th>Name CUST</th>
                                        <th>No. Shipment 1</th>
                                        <th>No. Shipment 2</th>
                                        <th>No. Seal</th>
                                        <th>Full / Empty</th>
                                        <th>Reefer / Dry</th>
                                        <th>Stuffing Date</th>
                                        <th>Container In / Out</th>
                                        <th>Origin Town</th>
                                        <th>Destination Town</th>
                                        <th>Vessel Name</th>
                                        <th>Delivery From JKT (ETD)</th>
                                        <th>Arv At Dest (ETA)</th>
                                        <th>Tanggal Container Masuk</th>
                                        <th>Remark</th>
                                        <th>Tanggal Dooring Container</th>
                                        <th>No. Shipment ULI HUB 1</th>
                                        <th>Tujuan Shipment ULI HUB 1</th>
                                        <th>Tgl Dooring Shipment ULI HUB 1</th>
                                        <th>No. Shipment ULI HUB 2</th>
                                        <th>Tujuan Shipment ULI HUB 2</th>
                                        <th>Tgl Dooring Shipment ULI HUB 2</th>

                                        <th style="background-color: khaki">Name AGEN</th>
                                        <th style="background-color: khaki">Invoice No. AGEN</th>
                                        <th style="background-color: khaki">Invoice AGEN date</th>
                                        <th style="background-color: khaki">Tgl Terima Invoice</th>
                                        <th style="background-color: khaki">Invoice AGEN Amount</th>
                                        <th style="background-color: khaki">Payment amount AGEN</th>
                                        <th style="background-color: khaki">Payment Date AGEN</th>
                                        <th style="background-color: khaki">Nomor B/L</th>
                                        <th style="background-color: khaki">Pembayaran</th>

                                        <th style="background-color: lavender">Invoice No. GENSET</th>
                                        <th style="background-color: lavender">Invoice GENSET date</th>
                                        <th style="background-color: lavender">Tgl Terima Invoice</th>
                                        <th style="background-color: lavender">Invoice GENSET Amount</th>
                                        <th style="background-color: lavender">Payment GENSET</th>
                                        <th style="background-color: lavender">Payment Date GENSET</th>

                                        <th style="background-color: LightCoral">Invoice No. BJTI</th>
                                        <th style="background-color: LightCoral">Invoice BJTI date</th>
                                        <th style="background-color: LightCoral">Tgl Terima Invoice</th>
                                        <th style="background-color: LightCoral">Invoice BJTI Amount</th>
                                        <th style="background-color: LightCoral">Payment BJTI</th>
                                        <th style="background-color: LightCoral">Payment Date BJTI</th>

                                        <th style="background-color: lightsteelblue">Name SHIP</th>
                                        <th style="background-color: lightsteelblue">Invoice No. SHIP</th>
                                        <th style="background-color: lightsteelblue">Invoice SHIP date</th>
                                        <th style="background-color: lightsteelblue">Tgl Terima Invoice</th>
                                        <th style="background-color: lightsteelblue">Invoice SHIP Amount</th>
                                        <th style="background-color: lightsteelblue">Payment SHIP</th>
                                        <th style="background-color: lightsteelblue">Payment Date SHIP</th>

                                        <th style="background-color: lightpink">Invoice No. THC</th>
                                        <th style="background-color: lightpink">Invoice THC date</th>
                                        <th style="background-color: lightpink">Tgl Terima Invoice</th>
                                        <th style="background-color: lightpink">Invoice THC Amount</th>
                                        <th style="background-color: lightpink">Payment THC</th>
                                        <th style="background-color: lightpink">Payment Date THC</th>

                                        <th style="background-color: Silver">Invoice No. PLUG</th>
                                        <th style="background-color: Silver">Invoice PLUG date</th>
                                        <th style="background-color: Silver">Tgl Terima Invoice</th>
                                        <th style="background-color: Silver">Invoice PLUG Amount</th>
                                        <th style="background-color: Silver">Payment PLUG</th>
                                        <th style="background-color: Silver">Payment Date PLUG</th>
                                        <th style="background-color: Silver">Tanggal Kirim Dokumen ke AR</th>

                                        <th style="background-color: moccasin">Invoice No. Buruh</th>
                                        <th style="background-color: moccasin">Invoice Buruh date</th>
                                        <th style="background-color: moccasin">Tgl Terima Invoice</th>
                                        <th style="background-color: moccasin">Invoice Buruh Amount</th>
                                        <th style="background-color: moccasin">Payment Buruh</th>
                                        <th style="background-color: moccasin">Payment Date Buruh</th>

                                        <th style="background-color: palegreen">No. Invoice Shipment ULI HUB 1</th>
                                        <th style="background-color: palegreen">Tgl Invoice Shipment ULI HUB 1</th>
                                        <th style="background-color: palegreen">Tgl Terima Invoice</th>
                                        <th style="background-color: palegreen">Invoice Shipment ULI HUB 1 Amount</th>
                                        <th style="background-color: palegreen">Payment Shipment ULI HUB 1 Amount</th>
                                        <th style="background-color: palegreen">Payment Date Shipment ULI HUB 1</th>
                                        <th style="background-color: palegreen">No. Invoice Shipment ULI HUB 2</th>
                                        <th style="background-color: palegreen">Tgl Invoice Shipment ULI HUB 2</th>
                                        <th style="background-color: palegreen">Tgl Terima Invoice</th>
                                        <th style="background-color: palegreen">Invoice Shipment ULI HUB 2 Amount</th>
                                        <th style="background-color: palegreen">Payment Shipment ULI HUB 2 Amount</th>
                                        <th style="background-color: palegreen">Payment Date Shipment ULI HUB 2</th>

                                        <th style="background-color: plum">Invoice No. LAIN</th>
                                        <th style="background-color: plum">Invoice LAIN date</th>
                                        <th style="background-color: plum">Tgl Terima Invoice</th>
                                        <th style="background-color: plum">Invoice LAIN Amount</th>
                                        <th style="background-color: plum">Payment LAIN</th>
                                        <th style="background-color: plum">Payment Date LAIN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($dataAP as $ap) { ?>
                                        <tr class="odd gradeX">
                                        <td><?php echo $ap->no_transaksi ?></td>
                                        <td><?php echo $ap->IMO ?></td>
                                        <td><?php echo $ap->no_container ?></td>
                                        <td><?php echo $ap->name_cust ?></td>
                                        <td><?php echo $ap->no_shipment ?></td>
                                        <td><?php echo $ap->no_shipment2 ?></td>
                                        <td><?php echo $ap->no_seal ?></td>
                                        <td><?php echo $ap->full_empty ?></td>
                                        <td><?php echo $ap->reefer_dry ?></td>
                                        <td><?php echo $ap->stuff_date ?></td>
                                        <td><?php echo $ap->in_out?></td>
                                        <td ><?php echo $ap->origin_town ?></td>
                                        <td><?php echo $ap->dest_town ?></td>
                                        <td><?php echo $ap->vessel_name ?></td>
                                        <td><?php echo $ap->deliv_date ?></td>
                                        <td><?php echo $ap->arv_at_dest ?></td>
                                        <td><?php echo $ap->tgl_kon_masuk ?></td>
                                        <td>
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px;background-color: rgb(255, 255, 255);">
                                            <?php echo $ap->remark_op ?>
                                        </div>
                                        </td>
                                        <td><?php echo $ap->tgl_door ?></td>
                                        <td><?php echo $ap->no_ship_uli ?></td>
                                        <td><?php echo $ap->tuj_ship_uli ?></td>
                                        <td><?php echo $ap->tgl_door_uli ?></td>
                                        <td><?php echo $ap->no_ship_uli2 ?></td>
                                        <td><?php echo $ap->tuj_ship_uli2 ?></td>
                                        <td><?php echo $ap->tgl_door_uli2 ?></td>

                                        <td style="background-color: khaki"><?php echo $ap->name_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->inv_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->inv_ag_date ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->tgl_trima_inv_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->inv_ag_am ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->pay_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->date_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->no_bl ?></td>
                                        <td style="background-color: khaki"><?php echo $ap->no_pem ?></td>
                                        
                                        <td style="background-color: lavender"><?php echo $ap->inv_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $ap->inv_genset_date ?></td>
                                        <td style="background-color: lavender"><?php echo $ap->tgl_trima_inv_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $ap->inv_genset_am ?></td>
                                        <td style="background-color: lavender"><?php echo $ap->pay_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $ap->date_genset ?></td>

                                        <td style="background-color: LightCoral"><?php echo $ap->inv_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $ap->inv_date_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $ap->tgl_trima_inv_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $ap->inv_bjti_am ?></td>
                                        <td style="background-color: LightCoral"><?php echo $ap->pay_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $ap->date_bjti ?></td>
                                        
                                        <td style="background-color: lightsteelblue"><?php echo $ap->name_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->inv_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->inv_ship_date ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->tgl_trima_inv_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->inv_ship_am ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->pay_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $ap->date_ship ?></td>

                                        <td style="background-color: lightpink"><?php echo $ap->inv_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $ap->inv_thc_date ?></td>
                                        <td style="background-color: lightpink"><?php echo $ap->tgl_trima_inv_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $ap->inv_thc_am ?></td>
                                        <td style="background-color: lightpink"><?php echo $ap->pay_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $ap->date_thc ?></td>

                                        <td style="background-color: Silver"><?php echo $ap->inv_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $ap->inv_plug_date ?></td>
                                        <td style="background-color: Silver"><?php echo $ap->tgl_trima_inv_plug?></td>
                                        <td style="background-color: Silver"><?php echo $ap->inv_plug_am ?></td>
                                        <td style="background-color: Silver"><?php echo $ap->pay_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $ap->date_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $ap->tgl_kirim_plug_ar ?></td>

                                        <td style="background-color: moccasin"><?php echo $ap->inv_buruh ?></td>
                                        <td style="background-color: moccasin"><?php echo $ap->inv_buruh_date  ?></td>
                                        <td style="background-color: moccasin"><?php echo $ap->tgl_trima_inv_buruh?></td>
                                        <td style="background-color: moccasin"><?php echo $ap->inv_buruh_am ?></td>
                                        <td style="background-color: moccasin"><?php echo $ap->pay_buruh ?></td>
                                        <td style="background-color: moccasin"><?php echo $ap->date_buruh ?></td>

                                        <td style="background-color: palegreen"><?php echo $ap->inv_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->tgl_inv_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->tgl_trima_uli?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->inv_uli_am ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->pay_ship_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->pay_date_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->inv_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->tgl_inv_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->tgl_trima_uli2?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->inv_uli_am2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->pay_ship_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $ap->pay_date_uli2 ?></td>

                                        <td style="background-color: plum"><?php echo $ap->inv_lain ?></td>
                                        <td style="background-color: plum"><?php echo $ap->inv_lain_date ?></td>
                                        <td style="background-color: plum"><?php echo $ap->tgl_trima_inv_lain ?></td>
                                        <td style="background-color: plum"><?php echo $ap->inv_lain_am ?></td>
                                        <td style="background-color: plum"><?php echo $ap->pay_lain ?></td>
                                        <td style="background-color: plum"><?php echo $ap->date_lain ?></td>
                                        <td>
                                        <a href="editAP/<?php echo $ap->no_transaksi;?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button> </a>  
                                        <a href="delAP/<?php echo $ap->no_transaksi; ?>">
                                        <button type="button" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class="glyphicon glyphicon-trash"></i></button>
                                        </a>
                                        </td>
                                    </tr>  
                                    <?php } ?>
                                             
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                        <div  style="padding: 15px">
                    <a href="<?php echo base_url()."index.php/excelAP/cetakAP"?>"><button type="button" class="btn btn-success"><i class="fa   fa-download"></i>  DOWNLOAD </button></a>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                </div>

                <!-- /.col-lg-6 -->
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

    <!-- Data Tables JQuery  -->
    <!-- <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>assets/js_table/jquery.dataTable.js"></script> -->

    <!-- Page-Level Data Tables Scripts - Tables - Use for reference -->
   <!--  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script> -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});
    // $(document).ready(function() {
    //     $('#dataTables-example').DataTable({
    //         responsive: true
    //     });
    // });
    </script>

</body>

</html>
