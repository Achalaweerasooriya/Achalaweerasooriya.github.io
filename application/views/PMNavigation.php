            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(''); ?>DashBoardController/redirectToPages/home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(''); ?>DashBoardController/PMViewProjects"><i class="fa fa-fw fa-bar-chart-o"></i> On-Going Projects</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(''); ?>projectManagerTasks/ViewBacklog""><i class="fa fa-fw fa-table"></i> Projects BackLog</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i>Developer Teams</a></li>
                
                    
                    <li>
                        <a href="<?php echo base_url(''); ?>createproject"><i class="fa fa-fw fa-wrench"></i> Create Project</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Project Profile</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Client Details</a>
                            </li>
                            <li>
                                <a href="#">View Project</a>
                            </li>
                            <li>
								<a href="<?php echo base_url();?>projectManagerTasks/addU">Add User Stories To Projects</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(''); ?>SearchTask_Controller/index">Search Tasks by Sprint Id</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(''); ?>SearchEmp_Controller/index">Search Tasks by User Id</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url(''); ?>createTeam"><i class="fa fa-fw fa-table"></i> Create Team</a>
                    </li>
                    <li>
                        <a href="Create team.html"><i class="fa fa-fw fa-table"></i> Profile</a>
                    </li>
               
                </ul>
                
                
            </div>
            
            <!-- /.navbar-collapse -->
        </nav>
