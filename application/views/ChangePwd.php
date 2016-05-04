<div style="margin-left:-200px;">

    <div id="wrapper">

        <div id="page-wrapper">

                  <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Reset Password <small>Here</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> User Settings</li>
                        </ol>
                       
					   
					   <!-- change password form !-->
					<form method="post" action="<?php echo base_url() ."DashBoardController/changePassword"?>"> 
					
					   <p><label> Old Password </label></p>
					   <p><input type="password" id="oldpassword"  name="oldpassword"></input></p>
					   <p><label>New Password</label></p>
					   <p><input type="password" id="newpassword" name="newpassword"></input></p><?php echo form_error('npass'); ?>
					   <p><label>Confirm New Password</label></p>
					   <p><input type="password" id="rnewpassword" name="rnewpassword"></input></p><?php echo form_error('rpass'); ?>
					   <input type="submit" id="submit" value="Submit"></input>
					   <input type="reset" id="reset" value="Reset"></input>
					   
					   </form> 

					   
					 
					   
					   

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

					</div>
			<!-- /#wrapper -->
		</div>
	</div>
</div>    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>