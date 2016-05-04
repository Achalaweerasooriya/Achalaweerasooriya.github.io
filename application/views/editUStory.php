
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
	
	
	
<body>


      

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Edit User Story </h1>
                      
                  </div>

        			<div style="		
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;">                
							<div class="panel panel-primary" style="width:700px; align:center;">
                            <div class="panel-heading" style="width:700px;">
                                <h3 class="panel-title" >Details</h3>
                            </div>
                            <div class="panel-body" style="width:700px;">  
						
						
	
			
								
								
								
		<?php foreach ($story as $UserStory): ?>				
		 <?php $id = $UserStory->devid; ?>
		<form method="post" action="<?php echo base_url() ."addstories/saveEdit/".$id?>">
		<p class="headings">	Select new Devoloper to add : </p>
		<p class="input"><select  class="form-control" id="developer" name ="developer" style="width:200px;"> </p>
         
		 <?php 
			$val2 = $row['name'];
            foreach($developers as $row)
            { 
             echo '<option value="'.$row->full_name.'" >'.$row->full_name.'</option>';
            }
            ?>
            </select>
			<p>
			
			<p class="headings">
			Select a date to complete the project :   <i></p>

			 <p class="input"><input type="date" id="datecomplete"  name ="datecomplete" value="<?php echo $UserStory->datetocomplete;?>" onchange="calculate()">
			</i>	</p>
			
			
			<p class="headings">Enter new User Story: </p>				
			<p class="input"><?php echo form_textarea(array ( 'id' => 'userstoryarea','name'=>'userstoryarea', 'value'=> $UserStory->userstory )); ?>
		
			</p>
			
					 <font size = 6 >
														Total days to complete: </font>
													<font color=red size=8 >
													<p id ="diff">   </p>
													</font>
													
			
			<p class="input"><input type="submit" onclick="return check()" name ="dsubmit" value="Save" id="submit" onclick="done()"></p>
			<script> function done() {alert("Updated Succesfully");}</script>
			</form>
			<?php endforeach; ?>

</span>

													<p>		&nbsp; </p>
													
												
											<script type='text/javascript'>

                                                 function check(){



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
										//alert(diffDays);
																			//alert(date);
												
												document.getElementById("diff").innerHTML = diffDays;
												
											}	
											}
											
											
											</script>

											
											
									
												</a>
												
										
											</div>
												<p>&nbsp;</p>
                        </div>
						</div>
                        <p>&nbsp;</p>
              </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->


</body>

