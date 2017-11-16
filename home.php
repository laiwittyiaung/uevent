

   

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $unconfirmevent ?></div>
                                        <div>Requested Events!</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $confirmevent  ?></div>
                                        <div>Confirmed Events!</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?= $sponsor ?></div>
                                        <div>Sponsor Company!</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                <!-- /.row -->
                <div class="row">

                                 
                                 <?php foreach ($eventquery as $eventkey ) { ?>
                                    <div class="card col-md-4 ">
                       <img src="<?= base_url() ?>img/banner3.png" alt="Avatar" style="width:100%">
         
                      <h3 align="center"><b><?= $eventkey['event_name'] ?></b></h3>
                      <h5 align="center"><?= $eventkey['uni_name'] ?></h5>
                       <p align="center">Requirement: <?= $eventkey['requirement']?></p>
                      <p align="center">Description: <?= $eventkey['description']?></p>
                      <p align="center">Category: <?= $eventkey['eventcat_name']?></p>
                     
                      <p align="center">Organization Name: <?= $eventkey['org_name'] ?></p>
                      <p align="center">Date: <?= $eventkey['start_date']?></p>
                      <p align="center">Time: <?= $eventkey['end_date'] ?> </p>
                      
                     </div>
         
                                     <?php }  ?>
                    </div>

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
