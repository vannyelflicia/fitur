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
                    <a href="<?php echo base_url()."index.php/pagecontrol/formAR"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i>  ADD</button></a>
                </div>
 -->                     <div class="panel panel-danger">
                        <div class="panel-heading">
                            <center>Data Monitoring Container Tables</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
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
                                        <th style="background-color: DarkSalmon">Tanggal Container Masuk</th>
                                        <th style="background-color: DarkSalmon">Remark</th>
                                        <th style="background-color: DarkSalmon">Tanggal Dooring Container</th>
                                        <th style="background-color: DarkSalmon">No. Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">Tujuan Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">Tgl Dooring Shipment ULI HUB 1</th>
                                        <th style="background-color: DarkSalmon">No. Shipment ULI HUB 2</th>
                                        <th style="background-color: DarkSalmon">Tujuan Shipment ULI HUB 2</th>
                                        <th style="background-color: DarkSalmon">Tgl Dooring Shipment ULI HUB 2</th>

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php foreach ($datamonit as $key) { ?>
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
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_transaksiin ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->IMO_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_container_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->name_cust_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_shipment_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_shipment2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_seal_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->full_empty_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->reefer_dry_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->stuff_date_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->in_out_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->origin_town_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->dest_town_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->vessel_name_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->deliv_date_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->arv_at_dest_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tgl_kon_masuk_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->remark_op_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tgl_door_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_ship_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tuj_ship_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tgl_door_uli_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->no_ship_uli2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tuj_ship_uli2_in ?></td>
                                        <td style="background-color: DarkSalmon"><?php echo $key->tgl_door_uli2_in ?></td>

                                    </tr>  
                                    <?php }  ?>  
                                    
                                </tbody>
                            </table>
  
                        </div>
                        <!-- /.panel-body -->
                        <div  style="padding: 15px">
                    <a href="<?php echo base_url()."index.php/excelMonitoring/cetakMonitoring"?>"><button type="button" class="btn btn-success"><i class="fa   fa-download"></i>  DOWNLOAD </button></a>
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
