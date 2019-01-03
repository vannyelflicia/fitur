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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/3.3.6.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/1.12.2.bootstrap-select.min.css">
    <!-- <link href="<?php echo base_url()?>assets/multiple-select/multiple-select.css" rel="stylesheet" > -->

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
                <h1 class="page-header"><center>OPERASIONAL FORM</center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashOP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/insertOP"; ?>" >
                                        <div class="form-group">
                                            <label>*No Transaksi</label>
                                            <input type="text" disabled class="form-control" value="<?php echo $notrans ?>" >
                                            <input type="hidden" name="no_transaksi" value="<?php echo $notrans ?>">
                                        </div>
                                   		 <div class="form-group">
                                            <label>IMO</label>
                                            <input type="text" class="form-control" placeholder="Enter IMO" name="IMO" required>
                                            <p class="help-block"> mm-dd-(urutan container) Example : 04-28-015 </p>
                                        </div>
                                        <div class="form-group">
                                            <label>No. & Size Container</label>
                                            <select name="no_container" id="no_container" class="form-control selectpicker" data-live-search="true" multiple >
                                            <?php foreach ($nocon as $c) { ?>
                                            <option value="<?php echo $c->no_container?> <?php echo $c->size?>"><?php echo $c->no_container?> <?php echo $c->size?></option>
                                            <?php } ?>
                                            </select>
                                            <p class="help-block"> Type No & Size Container in here </p>
                                            <input type="hidden" name="hidden_nocon" id="hidden_nocon">
                                        </div>
                                         <div class="form-group">
                                            <label>Name CUST</label>
                                            <input type="text" class="form-control" placeholder="Enter Name CUST" name="name_cust">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Shipment 1</label>
                                            <input type="text" class="form-control" placeholder="Enter No. Shipment 1" name="no_shipment">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Shipment 2</label>
                                            <input type="text" class="form-control" placeholder="Enter No. Shipment 2" name="no_shipment2">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Seal</label>
                                            <input type="text" class="form-control" placeholder="Enter No. Seal" name="no_seal" >
                                        </div>
                                        <div class="form-group">
                                            <label>Full / Empty</label>
                                            <select name="full_empty" class="form-control">
                                            <option value="">---Full/Empty---</option>
                                            <option value="Full">Full</option>
                                            <option value="Empty">Empty</option>
                                            <option value="Stuffing">Stuffing</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Reefer / Dry</label>
                                            <select name="reefer_dry" class="form-control">
                                             <option value="">---Reefer/Dry---</option>
                                            <option value="Reefer">Reefer</option>
                                            <option value="Dry">Dry</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Stuffing Date</label>
                                            <input type="Date" class="form-control" placeholder="Enter Stuffing Date" name="stuff_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Container In/Out</label>
                                            <input type="text" class="form-control" value="Out" name="in_out" disabled>
                                            <input type="hidden" class="form-control" value="Out" name="in_out" >
                                        </div>
                                        <div class="form-group">
                                            <label>Origin Town</label>
                                            <input type="text" class="form-control" placeholder="Enter Origin Town" name="origin_town">
                                        </div>
                                        <div class="form-group">
                                            <label>Destination Town</label>
                                            <input class="form-control" placeholder="Enter Destination Town" name="dest_town">
                                        </div>
                                        <div class="form-group">
                                            <label>Vessel Name</label>
                                            <input class="form-control" placeholder="Enter Vessel Name" name="vessel_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Delivery Date (ETD)</label>
                                            <input type="Date" class="form-control" name="deliv_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Arrive At Destination (ETA)</label>
                                            <input type="date" class="form-control" name="arv_at_dest">
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <textarea class="form-control" name="remark_op" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Dooring Container</label>
                                            <input type="date" class="form-control" name="tgl_door">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Kontainer Masuk Depo</label>
                                            <input type="date" class="form-control" name="tgl_kon_masuk">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Shipment ULI HUB 1</label>
                                            <input class="form-control" name="no_ship_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan Shipment ULI HUB 1</label>
                                            <input class="form-control" name="tuj_ship_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Dooring Shipment ULI HUB 1</label>
                                            <input type="date" class="form-control" name="tgl_door_uli">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Shipment ULI HUB 2</label>
                                            <input class="form-control" name="no_ship_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan Shipment ULI HUB 2</label>
                                            <input class="form-control" name="tuj_ship_uli2">
                                        </div>
                                        <div class="form-group">
                                            <label>Tgl Dooring Shipment ULI HUB 2</label>
                                            <input type="date" class="form-control" name="tgl_door_uli2">
                                        </div>
                                        <input name="submit" type="submit" class="btn btn-default" value="Submit">
                                        <input type="reset" class="btn btn-default" value="Reset">
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

    <script src="<?php echo base_url()?>assets/3.1.0.jquery.min.js" ></script>

    <script src="<?php echo base_url()?>assets/3.3.7.bootstrap.min.js" ></script>

    <script src="<?php echo base_url()?>assets/1.12.2.bootstrap-select.min.js" ></script>

    <script>
        $(document).ready(function(){
        $('.selectpicker').selectpicker();

        $('#no_container').change(function(){
        $('#hidden_nocon').val($('#no_container').val());
        });

        $('#multiple_select_form').on('submit', function(event){
        event.preventDefault();
        if($('#no_container').val() != '')
            {
                var form_data = $(this).serialize();
                $.ajax({
                url:"<?php echo base_url('index.php/pagecontrol/insertno_con')?>",
                method:"POST",
                data:form_data,
                success:function(data)
            {
             $('#hidden_nocon').val('');
             $('.selectpicker').selectpicker('val', '');
             alert(data);
            }
           })
          }
          else
          {
           alert("Please select no container");
           return false;
          }
         });
        });
    </script>

</body>

</html>
