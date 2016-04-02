            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(''); ?>DashBoardController/redirectToPages/home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Schedule</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i>Reports</a></li>
                
                    <li>
                        <a href="#"><i class="fa fa-fw fa-wrench"></i> View My Team</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Projects</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url(''); ?>DashBoardController/ScrumMasterViewProjects/new">Queue</a>
                            </li>
                            <li>
                                <a href="#">In-Progress</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Create project.html"><i class="fa fa-fw fa-bar-chart-o"></i> View BackLog</a>
                    </li>
					<li>
                        <a href="Create team.html"><i class="fa fa-fw fa-table"></i> Send Message to the team</a>
                    </li>
                    <li>
                        <a href="Create team.html"><i class="fa fa-fw fa-table"></i> Profile</a>
                    </li>
               
                </ul>
                
                
            </div>
            
            <!-- /.navbar-collapse -->
        </nav>
