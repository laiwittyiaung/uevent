

<div class="wrap">
    <div class="wrapper">
        <div class="logo">
	       <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>usertemplate/images/U_Event.png"></a>
        </div>
        <div class="header_right">
	       <div class="cssmenu">
		      <ul>
		  	         <li><a href="<?php echo base_url(); ?>user_home"><span>Home</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_events"><span>Events</span></a></li>
			         <li><a href="<?php echo base_url(); ?>user_about"><span>About Us</span></a></li>
                     
                     <li><a href="<?php echo base_url(); ?>login"><span>Login</span></a></li>
                     
			         <div class="clear"></div>
		      </ul>
	       </div>
        </div>
	   <div class="clear"></div>
    </div>
</div>

<center>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="panel panel-default" style="width:70%;">
            <div class="panel-heading" style="background-color:#033;color:white;margin:10px;">Login</div>
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>login/in">
                    <div class="form-group">
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="radio" name="rad" value="admin">Login As Admin
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="radio" name="rad" value="student">Student Organization
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <input type="radio" name="rad" value="sponsor">Sponsor
                            </div>                    
                            <div>
                                <input type="submit" class="btn btn-primary" value="Login" name="add">
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
