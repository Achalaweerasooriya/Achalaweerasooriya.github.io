<!DOCTYPE html>
<html lang="en">


<body>
  

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Backlog
                            <small>Subheading</small>
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

			
			<form id="projectSelect" method="POST">
			
			Select Project :
			<select class="form-control" id="DropProjects" name ="DropProjects" onchange="refresh()"  style="width:200px;" > </p> 
			<?php   //fetching project name
			echo '<option><b>Select a project</b></option>';
				foreach($projects as $row)   
					{ 
					echo '<option value="'.$row->name.'">'.$row->name.'</option>';
					} ?>				
			</select>
			</form>
			
			<script>
			
			function refresh(){
				
				document.getElementById("projectSelect").submit();
				
				
			}
			
			</script>
			
			<p>
			
			<table class="table table-bordered table-hover table-striped"  style ="width:400px;">
                                <thead>
                                    <tr>
                                        <th>Userstory</th>
                                        <th>Time Remaining</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php foreach ($story->result_array() as $Srow):?>
								
                                    
                                        
                                    </tr>
                                    <tr>
                                        <td><?php echo $Srow['userstory']; ?></td>
                                        <td><?php echo $Srow['datetocomplete']; ?></td>
                                        
                                  
                                        
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
							
							<div class="well">
			
                   <p><?php echo $row->name; ?> </p> 
                </div>
			
			
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
