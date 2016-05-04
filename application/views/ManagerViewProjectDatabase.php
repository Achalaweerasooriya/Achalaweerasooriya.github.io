<!--new projects table-->
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-6">
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
						<?php foreach ($new->result_array() as $row): 
                                                    $class=($row['status']!='New' ? ($row['status']=='completed' ? 'danger' : 'warning'):'success');
							echo "<tr class='$class'>"?>
                                                              
								<td><?php echo $row['project_id'];?></td>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['start_date'];?></td>
								<td><?php echo $row['deadline'];?></td>
								<td><?php echo $row['description'];?></td>
								<td><?php echo $row['language'];?></td>
								<td><?php echo $row['framework'];?></td>
                                                                <?php if($class!='danger'){?>
                                                                <td><a href="#" style="color: #000000;"><input type="button" value="Edit Project"/></a></td>
                                                                <?php } ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				</div>
		</div>
</div>
	</div>