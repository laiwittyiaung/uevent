<!DOCTYPE HTML>

<div class="wrap">
    <div class="wrapper">
        <div class="logo">
         <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>usertemplate/images/U_Event.png"></a>
        </div>
        <div class="header_right">
         <div class="cssmenu">
          <ul>
                 <li ><a href="<?php echo base_url(); ?>user_home"><span>Home</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_event"><span>Events</span></a></li>
              <li><a href="<?php echo base_url(); ?>user_events"><span>Service</span></a></li>
                     <li><a href="<?php echo base_url(); ?>user_about"><span>About Us</span></a></li>
                     <li class="active"><a href="<?php echo base_url(); ?>create_event"><span>Register</span></a></li>
                     <li><a href="<?php echo base_url(); ?>sponsor_request"><span>Log In</span></a></li>
               <div class="clear"></div>
          </ul>
         </div>
        </div>
     <div class="clear"></div>
    </div>
</div>
<main>





<div class="row ">
    <div class="form-group ">
  <label class="col-md-2 control-label col-md-offset-2">Name</label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="name" placeholder="User">
  
  </div>
  </div>

     <div class="row form-group f1">
  <label class="col-md-2 control-label col-md-offset-2">Email</label>
  <div class="col-md-8">
    <input type="text" class="form-control" name="email" placeholder="User Email">
   
  </div>
  </div>

  <div class="row form-group f1">
  <label class="col-md-2 control-label col-md-offset-2">Password</label>
  <div class="col-md-8">
    <input type="password" class="form-control" name="pwd" placeholder="User Password ">
  </div>
  </div>

  
  
     <div class="form-group f3">
     <label class="row -md-2 control-label col-md-offset-2"></label>
   <div class="col-md-4">
           <button type="submit"  class="btn btn-success"  name="create">Sign Up</button>
    </div>
    </div>
  
  

</form> 

</main>