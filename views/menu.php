<?php if($this->session->userdata('akses')=='Operasional') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashOP' ?>"><i class="fa fa-database"></i> Dashboard OP</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>                 
                    </ul>
                </div>
</div>

<?php } if($this->session->userdata('akses')=='Supervisor'){?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashboard' ?>"><i class="fa fa-database"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashOP' ?>"><i class="fa fa-database"></i> Dashboard OP</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashAP' ?>"><i class="fa fa-database fa-fw"></i> Dashboard AP</span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashAR' ?>"><i class="fa fa-database "></i> Dashboard AR</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/DashTruck' ?>"><i class="fa fa-database "></i>  Dashboard Truck</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashpettycash' ?>"><i class="fa fa-database  "></i> Dashboard Petty Cash</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashmonitoring' ?>"><i class="fa fa-database  "></i> Dashboard Monitoring Container</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashdokumen_OP' ?>"><i class="fa fa-database  "></i> Dashboard Dokumen OP</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>

<?php } if($this->session->userdata('akses')=='Acount Payable') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashAP' ?>"><i class="fa fa-database fa-fw"></i> Dashboard AP</span></a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>

<?php } if($this->session->userdata('akses')=='Acount Receivable' ||$this->session->userdata('akses')=='Pajak') {?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashAR' ?>"><i class="fa fa-database "></i> Dashboard AR</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>

<?php } if($this->session->userdata('akses')=='Truck') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/DashTruck' ?>"><i class="fa fa-database "></i>  Dashboard Truck</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>

<?php } if($this->session->userdata('akses')=='Dokumen OP') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashdokumen_OP' ?>"><i class="fa fa-database  "></i> Dashboard Dokumen OP</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>
<?php } if($this->session->userdata('akses')=='Petty Cash') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashpettycash' ?>"><i class="fa fa-database  "></i> Dashboard Petty Cash</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>
<?php } if($this->session->userdata('akses')=='Monitoring Container') { ?>
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/dashmonitoring' ?>"><i class="fa fa-database  "></i> Dashboard Monitoring Container</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/Pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
</div>
<?php } ?>

