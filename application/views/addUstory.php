<!DOCTYPE html>
<html lang="en">

<head>


	<style>
	p.headings {
			margin-left: 20px;
			font-family: "Bookman Old Style";
			font-size: 150%;
		
	}
	p.input {
		
		margin-left: 30px;

	}
	
	
	#bg {
    background: url(pics/office-paperwork-supplies-vector-sheets_21-71061721.jpg) right bottom no-repeat, url(paper.gif) left top repeat;
    padding: 50px;
}
		
	
	</style>
	
</head>

<body>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add User Story </h1>
                      
                  </div>     
				<div id="bg">  </div>
					
	
	<div class="panel panel-primary" style="width:700px; align:center;">
                            <div class="panel-heading" style="width:700px;">
                                <h3 class="panel-title" >Details</h3>
                            </div>
                            <div class="panel-body" style="width:700px;">
                               
                          
	
	<form method="post" action="<?php echo base_url() ."addstories/addU"?>"><!--  form to add user stories -->					
											
											
											
			<p class = "headings"> Select a Project </p>   <!-- selecting a project -->
			<p class = "input"><select class="form-control" id="projects" name ="projects" style="width:200px;"> </p> 
			<?php   //fetching project name
				foreach($projects as $row)   
					{ 
					echo '<option value="'.$row->name.'">'.$row->name.'</option>';
					} ?>				
			</select>
										
								
										
			<p class="headings">	Select Devoloper to add : </p> <!-- selecting a developer  -->
			<p class ="input"><select class="form-control" id="developer" name ="developer" style="width:200px;"> </p>
		    <?php   //fetching developer names
                foreach($developers as $row)   
                 { 
                    echo '<option value="'.$row->user_name.'">'.$row->full_name.'</option>';
                 } ?>
             </select>  

			<p class="headings">    <!--  selecting a date to complete -->
			Select a date to complete the user story :   <i></p>
			<p class="input"><input type = "date" id="datecomplete" name="datecomplete" onchange="calculate()"></i>
			</p>
		
		<p  class="headings">User Story :<br></p> <!-- adding a user story  -->
		<p style="margin-left: 30px;">
        <textarea rows="10" cols="50" id ="userstory" name="userstory"></textarea></p></br>
        
		<br/>
													
				 <font size = 6 >  <!-- displaying number of days  -->
					Total days to complete: </font>
				<font color=red size=8 >
				<p class="input" id ="diff">   </p>
				</font>
									
											
				<span style="display:inline-block; width:100;"></span>
				&emsp;&emsp;&emsp;	

					<!-- submiting the form !-->
				<input type="submit" id="submit" onclick="return check()" name="submit" value="Add Story" class ="btn btn-lg btn-success">
									
									
									
					
				</form><br/>
				
				
					<div style = "	margin-left: 45px;">
										    <a href="<?php echo base_url();?>projectManagerTasks/viewUStory">
											<button type="button" class="btn btn-lg btn-success" >View User Stories</button>
											</a></div>
                </span>
		  </div>
                        </div>
                <p>		&nbsp; </p>
													
												
				<script type='text/javascript'>  
			     
                function check(){

                		//function to check the date input

                  var mydate   = document.getElementById('datecomplete').value;
                  var myString = document.getElementById('userstory').value;


                    if(myString.replace(/^\s+|\s+$/g, '').length == 0){
                        alert("Error!  Enter a valid user Story.!");
                        return false;
                    }
                    else if (mydate == ""){
                        alert("Error! Enter a valid date.!");
                    }

                    else{
                        alert("Sucecessfuly added");
                        return true;
                    }

                }


                 //calculating number of days 
									   
                function calculate() {
												
				var today = new Date();
    			var dd = today.getDate();
			    var mm = today.getMonth()+1; //January is 0!
				var yyyy = today.getFullYear();

				if(dd<10) {
				dd='0'+dd
						  } 

				if(mm<10) {
				mm='0'+mm
					      } 
															
				today = yyyy+'-'+mm+'-'+dd;

				var date= document.getElementById("datecomplete").value;
												
				var date1 = new Date(date);
				var date2 = new Date(today);

                if(date1.getTime() < date2.getTime()){
                document.getElementById("diff").innerHTML = "Error in date input";
                                                     }
                else {
					var timeDiff = Math.abs(date2.getTime() - date1.getTime());
					var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 				
					document.getElementById("diff").innerHTML = diffDays;												
					}
                    
                        } 

				</script>
												
										</div>
												<p>&nbsp;</p>
                        
                        <p>&nbsp;</p>
              </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 

</body>

</html>
