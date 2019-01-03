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
                <div class="col-lg-12"><!-- 
                <div class="col-md-offset-11" style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/formTruck"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>  ADD</button></a>
                </div> -->
                     <div class="panel panel-red">
                        <div class="panel-heading">
                            <center>Data Truck Tables</center>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($dataTruck as $key) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $key->no_transaksi ?></td>
                                        <td><?php echo $key->IMO ?></td>
                                        <td><?php echo $key->no_container ?></td>
                                        <td><?php echo $key->name_cust ?></td>
                                        <td><?php echo $key->no_shipment ?></td>
                                        <td><?php echo $key->no_shipment2 ?></td>
                                        <td><?php echo $key->no_seal ?></td>
                                        <td><?php echo $key->full_empty ?></td>
                                        <td><?php echo $key->reefer_dry ?></td>
                                        <td><?php echo $key->stuff_date ?></td>
                                        <td><?php echo $key->in_out?></td>
                                        <td ><?php echo $key->origin_town ?></td>
                                        <td><?php echo $key->dest_town ?></td>
                                        <td><?php echo $key->vessel_name ?></td>
                                        <td><?php echo $key->deliv_date ?></td>
                                        <td><?php echo $key->arv_at_dest ?></td>
                                        <td><?php echo $key->tgl_kon_masuk ?></td>
                                        <td>
                                        <div style="padding: 5px; overflow-y: auto; width: 150px; height: 50px;background-color: rgb(255, 255, 255);">
                                            <?php echo $key->remark_op ?>
                                        </div>
                                        </td>
                                        <td><?php echo $key->tgl_door ?></td>
                                        <td><?php echo $key->no_ship_uli ?></td>
                                        <td><?php echo $key->tuj_ship_uli ?></td>
                                        <td><?php echo $key->tgl_door_uli ?></td>
                                        <td><?php echo $key->no_ship_uli2 ?></td>
                                        <td><?php echo $key->tuj_ship_uli2 ?></td>
                                        <td><?php echo $key->tgl_door_uli2 ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->inv_truck ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->name ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->date ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->tujuan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->pesanan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->no_pol ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->jam ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->muatan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->ukuran ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->b_jajan ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->b_kom ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->b_kawal ?></td>
                                        <td style="background-color: LightCoral"><?php echo $key->b_laintr ?></td>
                                        <td>
                                        <a href="editTruck/<?php echo $key->no_transaksi; ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button> </a>  
                                        <a href="delTruck/<?php echo $key->no_transaksi; ?>">
                                        <button type="button" class="btn btn-danger btn-circle" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class="glyphicon glyphicon-trash"></i></button>
                                        <a href="exportTruck/<?php echo $key->no_transaksi; ?>"><button type="button" class="btn btn-success btn-circle" ><i class="fa fa-download"></i></button> </a> 
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
                    <a href="<?php echo base_url()."index.php/excelTruck/cetakTruck"?>"><button type="button" class="btn btn-success"><i class="fa   fa-download"></i>  DOWNLOAD </button></a>
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
