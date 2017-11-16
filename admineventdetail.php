

        <!-- Navigation -->
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Bug
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?= base_url()?>/admin">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart"></i> Event Detail
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

              

                <!--  -->
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Event Detail</h3>
                            </div>
                            <div class="panel-body">
                             
                                  
                                 <form  class=" form-horizontal">
                                    <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-file-text"></i> Event Name: </label>
                                    <div class="col-md-7">
                                    <p><?php echo $eventquery->{'event_name'}; ?> </p>
                                         <!-- <input type="text" class="form-control col-md-6 col-md-offset-1" name="bugname" value="<?= $bquery['bug_name'] ?>" required> -->
                                         <!-- <p><?= $bquery['bug_name'] ?></p> -->
                                    </div>
                                    </div>

                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Event Description:</label>
                                    <div class="col-md-7">
                                         <p><?php echo $eventquery->{'description'}; ?> </p>
                                         <!--  <p><?= $bquery['bugdes'] ?></p> -->
                                    </div>
                                    </div>
                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i>University Name:</label>
                                    <div class="col-md-7">
                                          <p><?php echo $eventquery->{'uni_name'}; ?> </p>
                                          <!-- <p><?= $bquery['user_name'] ?></p> -->
                                    </div>
                                    </div>
                                    


                                     <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-file-text"></i> Organization Name:</label>
                                    <div class="col-md-7">
                                      
                                     <!--  <p><?= $bquery['label_name'] ?></p> -->
                                
                                    </div>
                                    </div>

                                    <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-file-text"></i>  Date: </label>
                                    <div class="col-md-7">
                                     <p><?php echo $eventquery->{'start_date'}; ?> </p>
                                  <!--   <p><?= $bquery['priority_name']?></p> -->
                                    </div>
                                    </div>

                                    <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-file-text"></i>  Time: </label>
                                    <div class="col-md-7">
                                     <p><?php echo $eventquery->{'end_date'}; ?> </p>
                                  <!--   <p><?= $bquery['priority_name']?></p> -->
                                    </div>
                                    </div>

                                     
                                      


                                      
                               

                                   
                              <div class=" form-group">
                                         <label class="col-md-offset-1 col-md-3 control-label"></label>
                                    <div class="col-md-3">
                                
                                 <a href="<?= base_url() ?>index/event">
                                <button type="button"  class="btn btn-sm btn-success"  >
                                
                                 << Back</button></a> 
                                  <a href="<?= base_url()?>index/eventconfirm/<?=  $eventquery->{'event_id'}?>">
                                <button type="button"  class="btn btn-sm btn-primary"  name="create"onclick="return confirm('Are you surewant to confirm ? ')"><i class="fa fa-trash" aria-hidden="true"></i>
                                
                                  Confirm</button></a>
                                  
                                 </div>

                                    </div>
                                  




                                    <!-- <div class=" form-group">
                                         <label class="col-md-offset-1 col-md-3 control-label"></label>
                                    <div class="col-md-7">
                                      
                                <a href="<?= base_url()?>bug/delete/<?= $bquery['id'] ?>" class="btn btn-danger active btn-sm " role="button" onclick="return confirm('Are you sure want to delete? ')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                            
                                    </div>
                                    </div> -->

                                   <!--   <input type="hidden" value="<?= $bquery['id'] ?> " name="id"> -->
              
                              </form>
                            
                            </div>
                        </div>
                    </div> 
                </div>

                 </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   