<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<div class="wrap">
    <div class="wrapper">
        <div class="logo">
	       <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>usertemplate/images/U_Event.png"></a>
        </div>
        <div class="header_right">
	       <div class="cssmenu">
		      <ul>
		  	         <li class="active"><a href="<?php echo base_url(); ?>user_home"><span>Home</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_event"><span>Events</span></a></li>
			       
                     <li><a href="<?php echo base_url(); ?>user_about"><span>About Us</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_home"><span>Log Out</span></a></li>
                    
			         <div class="clear"></div>
		      </ul>
	       </div>
        </div>
	   <div class="clear"></div>
    </div>
</div>
<div class="fluid_container">
   <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
          <div data-src="<?php echo base_url(); ?>usertemplate/images/s1.png"> </div>
            <div data-src="<?php echo base_url(); ?>usertemplate/images/s2.png"> </div>
            <div  data-src="<?php echo base_url(); ?>usertemplate/images/s3.png"> </div>
            <div  data-src="<?php echo base_url(); ?>usertemplate/images/s4 .png"> </div>
  </div>
  <div class="clear"></div>
</div>
<!--header-->

 <main>

        <!--Main layout-->
        <div class="container">
            <!--First row-->
           
            <!--/.First row-->
            <h1><center>Organization Request Events</center></h1>
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
                   
                   
                       <h5><span class="meta-data"> Date: <?= $eventkey['start_date'] ?> | Duration: <?= $eventkey['end_date'] ?></span></h5>
                       <h5><span class="meta-data"> Place: <?= $eventkey['uni_name'] ?></span></h5>
                       <h5><span class="meta-data"> Requirement: <?= $eventkey['requirement'] ?></span></h5>
                       
                  
                   <div class="content">
                       <p>Description:<?= $eventkey['description']?></p>
                   </div>
                   <br/>
                   
                   <div class="tag">
                  
                   <a href="" >Pay Fund</a></div>
                  
                   
               </div>
           </div>
           </div>
           <?php }?>
             
           </div>
               
               

               
        </div>


    </main>
	


