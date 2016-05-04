<div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Settings
                            <small>-> Change User Details</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
		
					 <div class="panel panel-primary" style="width:350px;  margin-left:300px;">
                            <div class="panel-heading" style="width:350px;">
                                <h3 class="panel-title">New User Details</h3>
                            </div>
                            <div class="panel-body" style="width:350px;">
                                
                            
                        
				<div class="form-group"  style = "align: center;">
				<form method="post" action="<?php echo base_url() ."DashBoardController/changeUserDetails"?>">	
                                <b> Enter Name </b>
								<input class="form-control" placeholder="Jhon Smith" style="width:300px;" id ="name" name="name">
								<br>
								<b> Enter Email </b>
								<input class="form-control" placeholder="abc@example.com" style="width:300px;" id="email" name="email">
								<br>
								<b> Enter Username </b>
								<input class="form-control" placeholder="abc_post" style="width:300px;" id="username" name="username">
								<br>
								<center>
								<input type="submit" onclick="return check()" id="submit"  name="submit" value="Save Details" class ="btn btn-success">&nbsp &nbsp &nbsp
								<button type="button" class="btn btn-danger">Cancel</button>
								</center>
				</form>				
								</div>
							</div>  
				</div>
				
				
        </div>		
        <!-- /#page-wrapper -->

		
<script type='text/javascript'>

function check(){
	
	var sname = document.getElementById('name').value;
	var susername = document.getElementById('username').value;
	var semail = document.getElementById('email').value;
	var echeck = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    if(sname.replace(/^\s+|\s+$/g, '').length == 0){
                        alert("Error!  Enter a valid name.!");
                        return false;
                    }
					else  if(susername.replace(/^\s+|\s+$/g, '').length == 0){
                        alert("Error!  Enter a valid Username.!");
                        return false;
                    }
					else  if(echeck.test(semail) == false){
                        alert("Error!  Enter a valid Email.!");
                        return false;
                    }
					
					else if (semail.replace(/^\s+|\s+$/g, '').length == 0) {
						
						alert("Error!  Enter a valid Email.!");
					}
					
				else {
					alert("Successfully Added.!");
					return true;
				}	
	
}



</script>		
		
		

