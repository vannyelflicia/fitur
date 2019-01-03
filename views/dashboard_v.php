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

    <!-- Data Tables CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_table/jquery.dataTables.css"> -->

<!-- cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css -->
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <center>DASHBOARD</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="table-responsive-sm">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr >
                                        <th>No Transaksi</th>
                                        <th>IMO</th>
                                        <th>No. & Size Container</th>
                                        <th>Name CUST</th>
                                        <th>No. Shipment 1</th>
                                        <th style="background-color: LightBlue">Tanggal Terima Dokumen Shipment 1</th>
                                        <th style="background-color: LightBlue">Tanggal Kirim Dokumen Shipment 1 ke AR</th>
                                        <th style="background-color: LightBlue">Remark Shipment 1 ke AR</th>
                                        <th>No. Shipment 2</th>
                                        <th style="background-color: LightBlue">Tanggal Terima Dokumen Shipment 2</th>
                                        <th style="background-color: LightBlue">Tanggal Kirim Dokumen Shipment 2 ke AR</th>
                                        <th style="background-color: LightBlue">Remark Shipment 2 ke AR</th>
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
                                        <th style="background-color: LightBlue">Tanggal Terima Dokumen Shipment ULI HUB 1</th>
                                        <th style="background-color: LightBlue">Tanggal Kirim Dokumen Shipment ULI HUB 1</th>
                                        <th style="background-color: LightBlue">Remark Shipment ULI HUB 1</th>
                                        <th>Tujuan Shipment ULI HUB 1</th>
                                        <th>Tgl Stuffing Shipment ULI HUB 1</th>
                                        <th>No. Shipment ULI HUB 2</th>
                                        <th style="background-color: LightBlue">Tanggal Terima Dokumen Shipment ULI HUB 2</th>
                                        <th style="background-color: LightBlue">Tanggal Terima Dokumen Shipment ULI HUB 2</th>
                                        <th style="background-color: LightBlue">Remark Shipment ULI HUB 2</th>
                                        <th>Tujuan Shipment ULI HUB 2</th>
                                        <th>Tgl Dooring Shipment ULI HUB 2</th>
                                        <!-- OP -->
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
                                        <!-- AP -->
                                        <th style="background-color: GoldenRod">No. Invoice Shipment 1</th>
                                        <th style="background-color: GoldenRod">Tanggal Terima Dokumen Shipment 1</th>
                                        <th style="background-color: GoldenRod">Invoice Shipment 1 Date</th>
                                        <th style="background-color: GoldenRod">Invoice Shipment 1 Amount</th>
                                        <th style="background-color: GoldenRod">No. Faktur Pajak Shipment 1</th>
                                        <th style="background-color: GoldenRod">Invoice Shipment 1 Payment Date</th>
                                        <th style="background-color: GoldenRod">No. RC Shipment 1</th>
                                        <th style="background-color: GoldenRod">Invoice Shipment 1 Paid Amount</th>
                                        <th style="background-color: LightGreen">No. Invoice Shipment 2</th>
                                        <th style="background-color: LightGreen">Tanggal Terima Dokumen Shipment 2</th>
                                        <th style="background-color: LightGreen">Invoice Shipment 2 Date</th>
                                        <th style="background-color: LightGreen">Invoice Shipment 2 Amount</th>
                                        <th style="background-color: LightGreen">No. Faktur Pajak Shipment 2</th>
                                        <th style="background-color: LightGreen">Invoice Shipment 2 Payment Date</th>
                                        <th style="background-color: LightGreen">No. RC Shipment 2</th>
                                        <th style="background-color: LightGreen">Invoice Shipment 2 Paid Amount</th>
                                        <th style="background-color: LightSalmon">No. Invoice ULI HUB Shipment 1</th>
                                        <th style="background-color: LightSalmon">Tanggal Terima Dokumen  ULI HUB Shipment 1</th>
                                        <th style="background-color: LightSalmon">Invoice ULI HUB Shipment 1 Date</th>
                                        <th style="background-color: LightSalmon">Invoice ULI HUB Shipment 1 Amount</th>
                                        <th style="background-color: LightSalmon">No. Faktur Pajak ULI HUB Shipment 1</th>
                                        <th style="background-color: LightSalmon">Invoice ULI HUB Shipment 1 Payment Date</th>
                                        <th style="background-color: LightSalmon">No. RC ULI HUB Shipment 1</th>
                                        <th style="background-color: LightSalmon">Invoice ULI HUB Shipment 1 Paid Amount</th>
                                        <th style="background-color: LightSteelBlue">No. Invoice ULI HUB Shipment 2</th>
                                        <th style="background-color: LightSteelBlue">Tanggal Terima Dokumen  ULI HUB Shipment 2</th>
                                        <th style="background-color: LightSteelBlue">Invoice ULI HUB Shipment 2 Date</th>
                                        <th style="background-color: LightSteelBlue">Invoice ULI HUB Shipment 2 Amount</th>
                                        <th style="background-color: LightSteelBlue">No. Faktur Pajak ULI HUB Shipment 2</th>
                                        <th style="background-color: LightSteelBlue">Invoice ULI HUB Shipment 2 Payment Date</th>
                                        <th style="background-color: LightSteelBlue">No. RC ULI HUB Shipment 2</th>
                                        <th style="background-color: LightSteelBlue">Invoice ULI HUB Shipment 2 Paid Amount</th>
                                        <th style="background-color: LightGrey">No. Plug</th>
                                        <th style="background-color: LightGrey">Invoice Plug Date</th>
                                        <th style="background-color: LightGrey">Tanggal Terima Dokumen Plug</th>
                                        <th style="background-color: LightGrey">Invoice Plug Amount</th>
                                        <th style="background-color: LightGrey">Plug Payment Date</th>
                                        <th style="background-color: LightGrey">No. RC Plug</th>
                                        <th style="background-color: LightGrey">Plug Paid Amount</th>
                                        <th style="background-color: LightGrey">No. Faktur Pajak</th>
                                        <!-- AR -->
                                        <th style="background-color: LightCoral">No. Invoice</th>
                                        <th style="background-color: LightCoral">Name</th>
                                        <th style="background-color: LightCoral">Date</th>
                                        <th style="background-color: LightCoral">Tujuan</th>
                                        <th style="background-color: LightCoral">Pesanan</th>
                                        <th style="background-color: LightCoral">No. Polisi</th>
                                        <th style="background-color: LightCoral">Jam</th>
                                        <th style="background-color: LightCoral">Muatan</th>
                                        <th style="background-color: LightCoral">Ukuran</th>
                                        <th style="background-color: LightCoral">Biaya Jalan</th>
                                        <th style="background-color: LightCoral">Biaya Komisi</th>
                                        <th style="background-color: LightCoral">Biaya Kawalan</th>
                                        <th style="background-color: LightCoral">Biaya Lain2</th>
                                        <!-- TRUCK -->
                                        <th style="background-color: LightGreen">Biaya Stuffing</th>
                                        <th style="background-color: LightGreen">Tambahan Biaya Stuffing</th>
                                        <th style="background-color: LightGreen">Electrison</th>
                                        <th style="background-color: LightGreen">Biaya Karantina</th>
                                        <th style="background-color: LightGreen">Biaya Handling Full</th>
                                        <th style="background-color: LightGreen">Biaya Lolo</th>
                                        <th style="background-color: LightGreen">Biaya Adm</th>
                                        <th style="background-color: LightGreen">Biaya Lain-Lain</th>
                                        <!-- PETTY CASH -->
                                        <th style="background-color: DarkSalmon">No. Transaksi</th>
                                        <th style="background-color: DarkSalmon">IMO</th>
                                        <th style="background-color: DarkSalmon">No. & Size Container</th>
                                        <th style="background-color: DarkSalmon">Name CUST</th>
                                        <th style="background-color: DarkSalmon">No. Shipment 1</th>
                                        <th style="background-color: DarkSalmon">No. Shipment 2</th>
                                        <th style="background-color: DarkSalmon">No. Seal</th>
                                        <th style="background-color: DarkSalmon">Full / Empty</th>
                                        <th style="background-color: DarkSalmon">Reefer / Dry</th>
                                        <th style="background-color: DarkSalmon">Stuffing Date</th>
                                        <th style="background-color: DarkSalmon">Container In / Out</th>
                                        <th style="background-color: DarkSalmon">Origin Town</th>
                                        <th style="background-color: DarkSalmon">Destination Town</th>
                                        <th style="background-color: DarkSalmon">Vessel Name</th>
                                        <th style="background-color: DarkSalmon">Delivery From JKT (ETD)</th>
                                        <th style="background-color: DarkSalmon">Arv At Dest (ETA)</th>
                                        <th style="background-color: DarkSalmon">Tanggal Dooring Container</th>
                                        <th style="background-color: DarkSalmon">No. Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">Tujuan Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">Tgl Dooring Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">No. Shipment ULI HUB 2</th>
                                        <th style="background-color: DarkSalmon">Tujuan Shipment ULI HUB 2</th>
                                        <th style="background-color: DarkSalmon">Tgl Dooring Shipment ULI HUB 2</th>
                                        <!-- MONITORING -->
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($datahasil as $k) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $k->no_transaksi ?></td>
                                        <td><?php echo $k->IMO ?></td>
                                        <td><?php echo $k->no_container ?></td>
                                        <td><?php echo $k->name_cust ?></td>
                                        <td><?php echo $k->no_shipment ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok_ship_ar ?></td>
                                        <td style="background-color: LightBlue">
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px;background-color: LightBlue">
                                            <?php echo $k->remark_dok ?>
                                        </div>
                                        </td>
                                        <td><?php echo $k->no_shipment2 ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok2 ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok_ship_ar2 ?></td>
                                        <td style="background-color: LightBlue">
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px;background-color: LightBlue">
                                            <?php echo $k->remark_dok2 ?>
                                        </div>
                                        </td>
                                        <td><?php echo $k->no_seal ?></td>
                                        <td><?php echo $k->full_empty ?></td>
                                        <td><?php echo $k->reefer_dry ?></td>
                                        <td><?php echo $k->stuff_date ?></td>
                                        <td><?php echo $k->in_out ?></td>
                                        <td><?php echo $k->origin_town ?></td>
                                        <td><?php echo $k->dest_town ?></td>
                                        <td><?php echo $k->vessel_name ?></td>
                                        <td><?php echo $k->deliv_date ?></td>
                                        <td><?php echo $k->arv_at_dest ?></td>
                                        <td>
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px;">
                                            <?php echo $k->remark_op ?>
                                        </div>
                                        </td>
                                        <td><?php echo $k->tgl_door ?></td>
                                        <td><?php echo $k->tgl_kon_masuk ?></td>
                                        <td><?php echo $k->no_ship_uli ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok_uli ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_kirim_dok_uli ?></td>
                                        <td style="background-color: LightBlue">
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px; background-color: LightBlue">
                                            <?php echo $k->remark_uli ?>
                                        </div>
                                        </td>
                                        <td><?php echo $k->tuj_ship_uli ?></td>
                                        <td><?php echo $k->tgl_door_uli ?></td>
                                        <td><?php echo $k->no_ship_uli2 ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_dok_uli2 ?></td>
                                        <td style="background-color: LightBlue"><?php echo $k->tgl_kirim_dok_uli2 ?></td>
                                        <td style="background-color: LightBlue">
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px; background-color: LightBlue">
                                            <?php echo $k->remark_uli2 ?>
                                        </div>
                                        </td>
                                        <td><?php echo $k->tuj_ship_uli2 ?></td>
                                        <td><?php echo $k->tgl_door_uli2 ?></td>  
                                        <!-- OP -->
                                        <td style="background-color: khaki"><?php echo $k->name_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $k->inv_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $k->inv_ag_date ?></td>
                                        <td style="background-color: khaki"><?php echo $k->tgl_trima_inv_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $k->inv_ag_am ?></td>
                                        <td style="background-color: khaki"><?php echo $k->pay_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $k->date_ag ?></td>
                                        <td style="background-color: khaki"><?php echo $k->no_bl ?></td>
                                        <td style="background-color: khaki"><?php echo $k->no_pem ?></td>
                                        
                                        <td style="background-color: lavender"><?php echo $k->inv_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $k->inv_genset_date ?></td>
                                        <td style="background-color: lavender"><?php echo $k->tgl_trima_inv_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $k->inv_genset_am ?></td>
                                        <td style="background-color: lavender"><?php echo $k->pay_genset ?></td>
                                        <td style="background-color: lavender"><?php echo $k->date_genset ?></td>

                                        <td style="background-color: LightCoral"><?php echo $k->inv_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->inv_date_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->tgl_trima_inv_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->inv_bjti_am ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->pay_bjti ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->date_bjti ?></td>
                                        
                                        <td style="background-color: lightsteelblue"><?php echo $k->name_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->inv_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->inv_ship_date ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->tgl_trima_inv_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->inv_ship_am ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->pay_ship ?></td>
                                        <td style="background-color: lightsteelblue"><?php echo $k->date_ship ?></td>

                                        <td style="background-color: lightpink"><?php echo $k->inv_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $k->inv_thc_date ?></td>
                                        <td style="background-color: lightpink"><?php echo $k->tgl_trima_inv_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $k->inv_thc_am ?></td>
                                        <td style="background-color: lightpink"><?php echo $k->pay_thc ?></td>
                                        <td style="background-color: lightpink"><?php echo $k->date_thc ?></td>

                                        <td style="background-color: Silver"><?php echo $k->inv_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $k->inv_plug_date ?></td>
                                        <td style="background-color: Silver"><?php echo $k->tgl_trima_inv_plug?></td>
                                        <td style="background-color: Silver"><?php echo $k->inv_plug_am ?></td>
                                        <td style="background-color: Silver"><?php echo $k->pay_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $k->date_plug ?></td>
                                        <td style="background-color: Silver"><?php echo $k->tgl_kirim_plug_ar ?></td>

                                        <td style="background-color: moccasin"><?php echo $k->inv_buruh ?></td>
                                        <td style="background-color: moccasin"><?php echo $k->inv_buruh_date  ?></td>
                                        <td style="background-color: moccasin"><?php echo $k->tgl_trima_inv_buruh?></td>
                                        <td style="background-color: moccasin"><?php echo $k->inv_buruh_am ?></td>
                                        <td style="background-color: moccasin"><?php echo $k->pay_buruh ?></td>
                                        <td style="background-color: moccasin"><?php echo $k->date_buruh ?></td>

                                        <td style="background-color: palegreen"><?php echo $k->inv_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->tgl_inv_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->tgl_trima_uli?></td>
                                        <td style="background-color: palegreen"><?php echo $k->inv_uli_am ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->pay_ship_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->pay_date_uli ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->inv_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->tgl_inv_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->tgl_trima_uli2?></td>
                                        <td style="background-color: palegreen"><?php echo $k->inv_uli_am2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->pay_ship_uli2 ?></td>
                                        <td style="background-color: palegreen"><?php echo $k->pay_date_uli2 ?></td>

                                        <td style="background-color: plum"><?php echo $k->inv_lain ?></td>
                                        <td style="background-color: plum"><?php echo $k->inv_lain_date ?></td>
                                        <td style="background-color: plum"><?php echo $k->tgl_trima_inv_lain ?></td>
                                        <td style="background-color: plum"><?php echo $k->inv_lain_am ?></td>
                                        <td style="background-color: plum"><?php echo $k->pay_lain ?></td>
                                        <td style="background-color: plum"><?php echo $k->date_lain ?></td>
                                        <!-- AP -->
                                        <td style="background-color: GoldenRod"><?php echo $k->no_inv_ship ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->tgl_dok_ship ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->tgl_inv_ship ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->inv_ship_am ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->no_faktur_ship ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->tgl_inv_ship_pay ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->rc_ship ?></td>
                                        <td style="background-color: GoldenRod"><?php echo $k->inv_ship_paid_am ?></td>

                                        <td style="background-color: LightGreen"><?php echo $k->no_inv_ship2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->tgl_dok_ship2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->tgl_inv_ship2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->inv_ship_am2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->no_faktur_ship2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->tgl_inv_ship_pay2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->rc_ship2 ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->inv_ship_paid_am2 ?></td>

                                        <td style="background-color: LightSalmon"><?php echo $k->no_inv_uli ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->tgl_dok_uli ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->tgl_inv_uli ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->inv_uli_am ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->no_faktur_uli ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->tgl_inv_uli_pay ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->rc_uli ?></td>
                                        <td style="background-color: LightSalmon"><?php echo $k->inv_uli_paid_am ?></td>

                                        <td style="background-color: LightSteelBlue"><?php echo $k->no_inv_uli2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->tgl_dok_uli2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->tgl_inv_uli2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->inv_uli_am2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->no_faktur_uli2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->tgl_inv_uli_pay2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->rc_uli2 ?></td>
                                        <td style="background-color: LightSteelBlue"><?php echo $k->inv_uli_paid_am2 ?></td>

                                        <td style="background-color: LightGrey"><?php echo $k->no_plug ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->inv_plugar_date ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->tgl_dok_plug ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->inv_plugar_am ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->plug_pay_date ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->rc_plug ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->pay_plug_paid ?></td>
                                        <td style="background-color: LightGrey"><?php echo $k->no_faktur ?></td>
                                        <!-- AR -->
                                        <td style="background-color: LightCoral"><?php echo $k->inv_truck ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->name ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->date ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->tujuan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->pesanan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->no_pol ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->jam ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->muatan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->ukuran ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->b_jajan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->b_kom ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->b_kawal ?></td>
                                        <td style="background-color: LightCoral"><?php echo $k->b_laintr ?></td>
                                        <!-- TRUCK -->
                                        <td style="background-color: LightGreen"><?php echo $k->b_stuff ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->plus_b_stuff ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->electricson ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->b_karantina ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->b_handlfull ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->b_lolo ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->b_adm ?></td>
                                        <td style="background-color: LightGreen"><?php echo $k->b_lain ?></td>
                                        <!-- PETTY CASH -->
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_transaksiin ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->IMO_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_container_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->name_cust_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_shipment_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_shipment2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_seal_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->full_empty_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->reefer_dry_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->stuff_date_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->in_out_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->origin_town_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->dest_town_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->vessel_name_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->deliv_date_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->arv_at_dest_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->tgl_door_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_ship_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->tuj_ship_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->tgl_door_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->no_ship_uli2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->tuj_ship_uli2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $k->tgl_door_uli2_in ?></td>
                                        <!-- MONITORING -->
                                        <?php }  ?> 
                                    </tr>             
                                    
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- panel-body -->
                        <div  style="padding: 15px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/cetak"?>"><button type="button" class="btn btn-success"><i class="fa   fa-download"></i>  DOWNLOAD ALL</button></a>
                        </div>
                    </div>
                    <!-- /.panel
                </div>
                <!-- /.col-lg-12 -->
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
