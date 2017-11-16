
<div class="wrap">
    <div class="wrapper">
        <div class="logo">
	       <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>usertemplate/images/U_Event.png"></a>
        </div>
        <div class="header_right">
	       <div class="cssmenu">
		      <ul>
		  	         <li><a href="<?php echo base_url(); ?>org_home"><span>Home</span></a></li>
                     <li><a href="<?php echo base_url(); ?>org_event"><span>Events</span></a></li>
			         
                     <li class="active"><a href="<?php echo base_url(); ?>create_event"><span>
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

<center>
<?php if ($this->session->flashdata('message')) { ?>
                    <div align="center" class="alert alert-success"><?= $this->session->flashdata('message') ?></div>
                <?php } ?>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="panel panel-default col-md-6 col-sm-10 col-xs-10" >
		<div class="panel-heading" style="background-color:#033;color:white;margin:10px;">Create Event</div>
		<div class="panel-body" style="font-size:18;">
		 <form  class=" form-horizontal" method="post" action="<?= base_url() ?>index/usereventcreate">
			<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>user_home" >
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Event Name:</label>
					<div class="col-md-4 col-sm-6 col-xs-12"><input type="text" class="form-control" name="eventname"></div>
				</div>
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Event Description:</label>
					<div class="col-md-4 col-sm-6 col-xs-12"><input type="text" class="form-control" name="eventdes"></div>
				</div>
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Event Requirement:</label>
					<div class="col-md-4 col-sm-6 col-xs-12"><input type="text" class="form-control" name="eventreq"></div>
				</div><br/>
				
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">University Name:</label>
					<div class="col-smd-4 col-sm-6 col-xs-12">
						<select name="uniname" class="form-control">
							<?php foreach ($uniquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['uni_id'] ?>"><?=  $unikey['uni_name']?></option>
                    
                                        <?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Organization Name:</label>
					<div class="col-smd-4 col-sm-6 col-xs-12">
						<select name="orgname" class="form-control">
							<?php foreach ($orgquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['eventorg_id'] ?>"><?=  $unikey['org_name']?></option>
                    
                                        <?php }?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Organization Name:</label>
					<div class="col-smd-4 col-sm-6 col-xs-12">
						<select name="eventcat" class="form-control">
							<?php foreach ($catquery as $unikey ) { ?>
                                      
                                      <option value="<?= $unikey['eventcat_id'] ?>"><?=  $unikey['eventcat_name']?></option>
                    
                                        <?php }?>
						</select>
					</div>
				</div>

				
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Date:</label>
					<div class="col-md-4 col-sm-6 col-xs-12"><input type="date" class="form-control" name="startdate" ></div>
				</div>
				
				<div class="form-group">
					<label for="author" class="control-label col-md-4 col-sm-6 col-sx-12">Time:</label>
					<div class="col-md-4 col-sm-6 col-xs-12"><input type="text" class="form-control" name="enddate"></div>
				</div>
				
				<div>
					<input type="submit" class="btn btn-primary" value="Create" name="add">
				</div>
			</form>
		</div>

	</div>
	</div>
</center>

