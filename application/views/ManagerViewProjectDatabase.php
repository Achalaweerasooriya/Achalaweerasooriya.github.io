<!--new projects table-->
<div id="page-wrapper">
	<div class="row">
<<<<<<< HEAD
        <div class="col-lg-6"">
=======
        <div class="col-lg-6">
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
            <h2>New Projects</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
						<thead>
                            <tr>
								<th>Project ID</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Dead Line</th>
								<th>Description</th>
								<th>Language</th>
								<th>Framework</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
						<?php foreach ($new->result_array() as $row): ?>
							<tr>
=======
						<?php foreach ($new->result_array() as $row): 
                                                    $class=($row['status']!='New' ? ($row['status']=='completed' ? 'danger' : 'warning'):'success');
							echo "<tr class='$class'>"?>
                                                              
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
								<td><?php echo $row['project_id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['start_date'];?></td>
								<td><?php echo $row['deadline'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['language'];?></td>
								<td><?php echo $row['framework'];?></td>
<<<<<<< HEAD
=======
                                                                <?php if($class!='danger'){?>
                                                                <td><a href="#" style="color: #000000;"><input type="button" value="Edit Project"/></a></td>
                                                                <?php } ?>
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
<<<<<<< HEAD
				
				<h2>Ongoing Projects</h2>
                <div class="table-responsive">
					<!--Projects In progress-->
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Project ID</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Dead Line</th>
								<th>Description</th>
								<th>Language</th>
								<th>Framework</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($inprogress->result_array() as $row): ?>
							<tr>
								<td><?php echo $row['project_id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['start_date'];?></td>
								<td><?php echo $row['deadline'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['language'];?></td>
								<td><?php echo $row['framework'];?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				
				<h2>Completed Projects</h2>
					<!--Projects Completed-->
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Project ID</th>
                                <th>Project Name</th>
                                <th>Start Date</th>
                                <th>Dead Line</th>
								<th>Description</th>
								<th>Language</th>
								<th>Framework</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($completed->result_array() as $row): ?>
							<tr>
								<td><?php echo $row['project_id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['start_date'];?></td>
								<td><?php echo $row['deadline'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['language'];?></td>
								<td><?php echo $row['framework'];?></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
=======
>>>>>>> 58b73cf64c0ba1ef7e6939291a9fbc4545cd09d3
				</div>
		</div>
</div>
	</div>