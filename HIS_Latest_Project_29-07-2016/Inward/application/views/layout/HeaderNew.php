<!DOCTYPE html>
<html>
    <head>
        <title>HIS</title>
        <link href="../../../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../../../bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="../../../../bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="../../../../bootstrap/css/style.css" rel="stylesheet">
        <link href="../../../../bootstrap/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../../../bootstrap/css/bootstrap-combobox.css" rel="stylesheet">

        <link href="../../../../bootstrap/css/jquery-ui.css" rel="stylesheet">
 
        <!-- JavaScript -->
        <script src="../../../../bootstrap/js/jquery-1.11.1.min.js"></script>
        <script src="../../../../bootstrap/js/jquery-1.9.1.min.js"></script>
        <script src="../../../../bootstrap/js/bootstrap.js"></script>
        <script src="../../../../bootstrap/js/bootstrap-combobox.js"></script>
        <script src="../../../../bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../../../../bootstrap/js/jquery.dataTables.min.js"></script>
        
       <!-- for jquery tab-->
         <script src="../../../../bootstrap/js/jquery.js"></script>
        <script src="../../../../bootstrap/js/jquery-ui.js"></script>


        <!-- Custom JavaScript for the Menu Toggle -->
        <script>
            $('document').ready(function(){
                $('.combobox').combobox({bsVersion: '2'});
            });
        </script>
        <style>
            section .required
            {
                color: #f00;
            }                        

        </style>
        

    </head>
    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #FAFAFA; min-height:100px;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    
                    <ul class="nav nav-pills" STYLE="position:absolute; TOP:50px; LEFT:126px;" >
                        <li ><a href="index.html">Home</a></li>
                        <li ><a href="Preference.html">New Patient</a></li>
                        <li ><a href="#">Search</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>index.php/inward/wardAdmissionC/index">Inward</a></li>
                        <li ><a href="#">Pharmacy</a></li>
                        <li ><a href="#">Laboratory</a></li>
                        <li ><a href="<?php echo base_url(); ?>index.php/inward/AdmissionRequestC/index">OPD</a></li>
                        <li ><a href="#">Clinic</a></li>
                        <li ><a href="#">Reports</a></li>
                    </ul>

                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script type="text/javascript">
                        $('document').ready(function(){
                            resizeDiv();
                            window.onresize = function(event) {
                                resizeDiv();
                            }
                            function resizeDiv() {
                                //vph = $(window).height()-150;
                                vpw = $(window).width()-114;
                                //$('#content').css({'height':vph+'px'})
                                $('#log').css({'margin-left':vpw+'px','top':'50px'});
                            }
                        });
                    </script>
                    <span class="text-info" STYLE="position:absolute; TOP:50px; left:1250px;">
                    <ul class="nav nav-pills">

                        <li class="dropdown" id="log">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="<?php echo base_url(); ?>index.php/Inward/LoggedUser/index"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                </li>
                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Employee Details</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>index.php/Login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
</span>
                    <!-- Caption-->
                    <span class="text-info" STYLE="position:absolute; TOP:9px; left:135px;"><h4>SRI LANKA HEALTH INFORMATION SYSTEM</h4></span>
                    <!--logo-->
                    <IMG STYLE="position:absolute; TOP:2px; LEFT:2px; WIDTH:100px; HEIGHT:100px" SRC="../../../../bootstrap/HIS log.png">
                    <!-- User Image-->
                    <IMG STYLE="position:absolute; TOP:2px; right:150px; WIDTH:100px; HEIGHT:95px" SRC="../../../../bootstrap/doctor-Image.jpg">
                    <!-- User Name-->
                    <span class="label label-primary" STYLE="position:absolute; TOP:20px; right:35px;"><?php echo $_SESSION['empName']; ?></span>
                    <!--sign out-->

                    <a class="navbar-brand" href="#" style="color: #ffffff;"> </a>

                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav" style="top:100px;">

                        <li style="color: darkblue; left: 50px; text-align:center"><h4><i class="text-primary"></i></h4></li>
                        <?php if ($_SESSION['RoleId'] != '4') { ?>
                            <li ><a href="<?php echo base_url(); ?>index.php/inward/wardAdmissionC/index"><i class="text-primary"></i>Ward Admission</a></li>
                        <?php } ?>

                        <li ><a href="<?php echo base_url(); ?>index.php/inward/wardAdmissionC/newAdmission"><i class="text-primary"></i>New Admission</a></li>

                        <li ><a href="<?php echo base_url(); ?>index.php/inward/transferAdmissionC/index"><i class="text-primary"></i>Transfer Admission



                                <?php if ($count != 0) { ?>
                                    <span  class="badge pull-right"><?php echo $count; ?></span>
                                <?php } ?>
                            </a></li>
                        <?php if ($_SESSION['RoleId'] != '4') { ?>
                            <li><a href="<?php echo base_url(); ?>index.php/inward/patientBHTC/index"><i class="text-primary"></i>Patient BHT</a></li>
                        <?php } ?>
<!--                        <li><a href="<?php // echo base_url();    ?>index.php/inward/laboratoryC/index"><i class="text-primary"></i>Laboratory</a></li>-->

                        <?php if ($_SESSION['RoleId'] == '2') { ?>
                            <li><a href="<?php echo base_url(); ?>index.php/inward/wardManageC/index"><i class="text-primary"></i>Ward Manage</a></li>
                        <?php } ?>

                      
                            <?php
                            if (sizeof($mywards != null)) {
                                ?>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i>My Wards<b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                        <?php
                                        foreach ($mywards as $value) {
                                            ?>

                                            <li><a href="<?php echo base_url(); ?>index.php/inward/MyWardsC/index/<?php echo $value->wardNo; ?>"><?php echo $value->wardNo; ?></a></li>


                                            <?php
                                        }
                                        ?>

                                    </ul>
                                </li>
                                <?php
                            }
                            ?>
                       

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <br/>
            <br/>
            <br/>
