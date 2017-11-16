
        <div id="page-wrapper">

            <div class="container-fluid">
            <?php if ($this->session->flashdata('message')) { ?>
                    <div align="center" class="alert alert-success"><?= $this->session->flashdata('message') ?></div>
                <?php } ?>
            <div class="row">
                            <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bug fa-2x" ></i> Event Create</h3>
                            </div>
                            <div class="panel-body">
                                 
                              
                                 <form  class=" form-horizontal" method="post" action="<?= base_url() ?>index/eventcreate">

                                    <!-- <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-bug " ></i> Company Name</label>
                                    <div class="col-md-7">
                                         <input type="text" class="form-control col-md-6 col-md-offset-1" name="bugname" placeholder="Enter Bag Name" required>
                                        
                                    </div>
                                    </div> -->
                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Event Name</label>
                                    <div class="col-md-7">
                                         <input type="text" class="form-control" name="eventname" placeholder="Enter Event Name" required>
                                    </div>
                                    </div>

                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Event Description</label>
                                    <div class="col-md-7">
                                          <textarea class="form-control " id="inputDs" rows="1" name="eventdes" required></textarea>
                                    </div>
                                    </div>
                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Event Requirement</label>
                                    <div class="col-md-7">
                                          <textarea class="form-control " id="inputDs" rows="1" name="eventreq" required></textarea>
                                    </div>
                                    </div>
                                   
                                    <div class=" form-group">
                                     <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-ul" aria-hidden="true"></i> University Name</label>
                                    <div class="col-md-7">
                                      <select name="uniname" class="form-control">
                                     
                                      <?php foreach ($uniquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['uni_id'] ?>"><?=  $unikey['uni_name']?></option>
                    
                                        <?php }?>                                      
                                      </select>
                                
                                    </div>
                                    </div>
                                    <div class=" form-group">
                                     <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-ul" aria-hidden="true"></i> Organization Name</label>
                                    <div class="col-md-7">
                                      <select name="orgname" class="form-control">
                                     
                                     
                                        <?php foreach ($orgquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['eventorg_id'] ?>"><?=  $unikey['org_name']?></option>
                    
                                        <?php }?>  
                                      
                                      </select>
                                
                                    </div>
                                    </div>
                                    <div class=" form-group">
                                     <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-ul" aria-hidden="true"></i> Event Category</label>
                                    <div class="col-md-7">
                                      <select name="eventcat" class="form-control">
                                     
                                     
                                        <?php foreach ($eventcatquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['eventcat_id'] ?>"><?=  $unikey['eventcat_name']?></option>
                    
                                        <?php }?>  
                                      
                                      </select>
                                
                                    </div>
                                    </div>
                                     <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i>Date</label>
                                    <div class="col-md-7">
                                         <input type="date" class="form-control" name="startdate"  >
                                    </div>
                                    </div>
                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i>Time</label>
                                    <div class="col-md-7">
                                           <input type="text" class="form-control" name="enddate" >
                                    </div>
                                    </div>
                                                                  
                                     
                                   



                                    

                                    <div class=" form-group">
                                         <label class="col-md-offset-1 col-md-3 control-label"></label>
                                    <div class="col-md-7">
                                             <button type="submit"  class="btn icon-btn btn-success"  name="create"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                                 Create</button>
                                                 <!-- <a class="btn icon-btn btn-success" href="#"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</a> -->

                                    </div>
                                    </div>
              
                              </form>
                            
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
                     </div>
					           

					    

					</div>
					<!-- //The Team -->