 <div id="page-wrapper">

    <div class="container-fluid">
    <?php if ($this->session->flashdata('message')) { ?>
                    <div align="center" class="alert alert-success"><?= $this->session->flashdata('message') ?></div>
                <?php } ?>
    <h2 align="center"> Sponser Company </h2>
    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bug fa-2x" ></i> Sponsor Company  Create</h3>
                            </div>
                            <div class="panel-body">
                                 
                              
                                 <form  class=" form-horizontal" method="post" action="<?= base_url() ?>index/sponsorcreate">

                                    <!-- <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-bug " ></i> Company Name</label>
                                    <div class="col-md-7">
                                         <input type="text" class="form-control col-md-6 col-md-offset-1" name="bugname" placeholder="Enter Bag Name" required>
                                        
                                    </div>
                                    </div> -->
                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Company Name</label>
                                    <div class="col-md-7">
                                         <input type="text" class="form-control" name="comname" placeholder="Enter Sponsor Company Name" required>
                                    </div>
                                    </div>

                                    <div class=" form-group">
                                       <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-alt"></i> Company Description</label>
                                    <div class="col-md-7">
                                          <textarea class="form-control " id="inputDs" rows="1" name="comdes" required></textarea>
                                    </div>
                                    </div>

                                     <div class=" form-group">
                                        <label class="col-md-offset-1 col-md-3 control-label"><i class="fa fa-list-ul" aria-hidden="true"></i> Category Name</label>
                                    <div class="col-md-7">
                                      <select name="comcat" class="form-control">
                                      <!-- <option >Select Label</option> -->
                                      <?php foreach ($sponcat as $catkey ) { ?>
                                      
                                      <option value="<?= $catkey['sponcat_id'] ?>"><?=  $catkey['sponcat_name']?></option>
                    
                                        <?php }?>
                                      
                                      </select>
                                
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
		
    	<!-- Info Card with social icons -->
    	 <?php foreach ($sponquery as $sponkey ) { ?>

		<!-- <div class="info-card">
				<div class="front">
					<img class="card-image" src="http://i.imgur.com/QHxnyes.jpg?1">
				</div>
			<div class="back">
				<b><h1 align="center"><?= $sponkey['spon_name'] ?></h1></b>
                <h4 align="center">Category: <?= $sponkey['sponcat_name'] ?></h4>

				<p>
					<?= $sponkey['spon_des'] ?>
				</p>

				<div class="social">
					<a href="#" class="social-icon facebook  animate"><span class="fa fa-facebook"></span></a>

					<a href="https://twitter.com/MichaelCanlas7" target="_blank" class=" social-icon twitter  animate"><span class="fa fa-twitter"></span></a>

					<a href="https://github.com/ironprice91" target="_blank" class=" social-icon github  animate"><span class="fa fa-github-alt"></span></a>

				</div>
			</div>
		</div> -->
		 <div class="card col-md-3 col-md-offset-1">
         <img src="<?= base_url() ?>img/sponsor.png" alt="Avatar" style="width:100%">
         
         <h2 align="center"><b><?= $sponkey['spon_name'] ?></b></h2>
         <h4 align="center">Category: <?= $sponkey['sponcat_name'] ?></h4>
         <p align="center"><?= $sponkey['spon_des'] ?></p>
         </div>
         
		<?php } ?>

		<!-- Scrolling enabled for longer content -->
		
        </div>
               
 