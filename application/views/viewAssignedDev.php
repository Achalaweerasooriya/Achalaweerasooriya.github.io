   <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                      Assigned Tasks
                            <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Assigned Tasks
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
		
			<div class="jumbotron">
			<div style="margin-left: 200px;">
			<div class="panel panel-primary" style="width:500px;">
			<div class="panel-heading" style="width:500px;">You have to Complete</div>
			<div class="panel-body" style="width:500px;">
			
			<div class="table-responsive">
			<table class="table table-hover">
			<thead>
			<tr>
			<th>Tasks</th>
			<th>Date to Complete </th>
			<th>Project Name </th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($tasks->result_array()  as $row ): ?>
			<tr>
			<td><?php echo $row['userstory']; ?></td>
			<td><?php echo $row['datetocomplete']; ?></td>
			<td><?php echo $row['project']; ?></td>
					
			</tr>
			<?php endforeach; ?>
			</tbody>	
			</table>
			</div>
			</div>
				</div>
			</div>
			</div>
			</div>
		</div>