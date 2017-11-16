<!DOCTYPE HTML>

<div class="wrap">
    <div class="wrapper">
        <div class="logo">
	       <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>usertemplate/images/U_Event.png"></a>
        </div>
        <div class="header_right">
	       <div class="cssmenu">
		      <ul>
		  	           <li><a href="<?php echo base_url(); ?>org_home"><span>Home</span></a></li>
                     <li class="active"><a href="<?php echo base_url(); ?>org_event"><span>Events</span></a></li>
                      <li ><a href="<?php echo base_url(); ?>create_event"><span>
                     Create Event</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_about"><span>About</span></a></li>
                      <li><a href="<?php echo base_url(); ?>user_home"><span>Log Out</span></a></li>
                    
                    
                    
			         <div class="clear"></div>
		      </ul>
	       </div>
        </div>
	   <div class="clear"></div>
    </div>
</div>
<main>

   <!--Main layout-->
        <div class="container">
            <!--First row-->
           
            <!--/.First row-->
            <h1><center>Our UpComing Events</center></h1>
            <hr class="extra-margins">

            <!--Second row-->
            <div class="row">
            <?php foreach ($eventquery as $eventkey ) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
           <div class="thumbnail img-thumb-bg">
           <img src="<?= base_url ()?>img/banner3.png">
               <div class="overlay"></div>
               <div class="caption">
                   <div class="tag"><a href="#"><?=  $eventkey['eventcat_name'] ?></a></div>
                   <div class="title"><a href="#"><?= $eventkey['event_name'] ?></a></div>
                   
                   
                       <h5><span class="meta-data"> Date: <?= $eventkey['start_date'] ?>| Duration:10AM-2PM</span></h5>
                       <h5><span class="meta-data"> Place: <?= $eventkey['uni_name'] ?></span></h5>
                       
                  
                   <div class="content">
                       <p><?= $eventkey['description']?></p>
                   </div>
                   <br/>
                   <?php if($eventkey['eventcat_id']=="2")
                   {?>
                   <div class="tag"><a href="" >Register</a></div>
                   <?php  } ?>
                   
               </div>
           </div>
           </div>
           <?php }?>
              
           </div>
               
               

               
        </div>
    </main>