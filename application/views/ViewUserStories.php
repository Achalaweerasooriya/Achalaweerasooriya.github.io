
<body>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Current User Stories
                            <small>Administration</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php  echo base_url()."addstories/redirect" ?>";>Add Stories</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> '
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<!--  table showing  user stories-->
		<table class="table table-bordered table-hover table-striped">
						<thead>
                            <tr>
								<th>Development ID</th>
                                <th>Developer Name</th>
                                <th>User Story</th>
                                <th>Dead Line Date</th>
								<th>Project Name</th>
								<th>Progress</th>
								
                            </tr>
                        </thead>
                        <tbody><!--  getting data from database-->
						<?php foreach ($story->result_array() as $row): ?>
						
							<tr>   <!--display data in a table  !-->
								<td width="12%"><?php echo "dev".$row['devid']; ?></td>
								<td width="20%"><?php echo $row['name'];?></td>
								<td><?php echo $row['userstory'];?></td>
								<td width="12%"><?php echo $row['datetocomplete'];?></td>
								<td><?php echo $row['project'];?></td>
								<td width="12%"><?php  $val3 = $row['status']; echo $val3 ?><br>
								<?php echo '<input type="checkbox" id="completed" name="completed[]" value="2" onchange="funcCheckbox()"/>'?><br/><small>Mark as completed</small></td>
								<?php   $id= $row['devid'];   ?>
							
								<td width="12%"> 
								<a href ="<?php echo base_url()."addstories/editStory/".$id; ?> "> 
								
								<button class ="btn btn-warning" id="edit" type ="button">Edit   &nbsp &nbsp </button>
								</a> 
								<?php form_open('addstories/deleteStory');?>
								<a href = "<?php echo base_url()."addstories/deleteStory/" .$id; ?>" >
								<button class ="btn btn-danger" id="delete" type="button">Delete </td></a>
							</tr>
						<?php endforeach; ?>
						</tbody>
						
						
					</table>
			<script>	//checking check box for progress bar 
	
						
						
							    var comp = getElementsById('completedtext');
								var cboxes = getElemensById('completed');
								var len = cboxes.length;
					       	function funcCheckbox() {
							var count= (document.querySelectorAll('input[type="checkbox"]:checked').length);
							var countC= (document.querySelectorAll('input[type="checkbox"]').length);
							var elem = 	document.getElementById("progress-bar");
							var x= (count/countC)*100;
							elem.style.width = x + '%';				
							
						var precentvalue=	Math.round(x * 100) / 100
																	document.getElementById("precent").innerHTML = precentvalue + '%';												
							
							
    }
	
	
	</script>
							 <font size=10><p id ="boxes"> </p></font>
				Overall Completion:    &nbsp  <font color="red" size="3"> <p id="precent"></p></font>
				<div class="progress">
				<div class="progress-bar" role="progressbar" id ="progress-bar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="50"  style="position:relative;"><span class="sr-only">50% Complete</span>
                 </div>
					
                </div>
            </div>
            <!-- /.container-fluid -->



</body>

