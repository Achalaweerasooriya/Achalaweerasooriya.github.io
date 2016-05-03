<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SUPREME</title>

   <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>_include/Dashboard/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>_include/Dashboard/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>_include/Dashboard/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>_include/Dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="row" id="error-container"></div>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome <?php echo $this->session->username; ?></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(''); ?>LoginController/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(''); ?>Client"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="projects.html"><i class="fa fa-fw fa-bar-chart-o"></i> BackLog</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Schedule</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-edit"></i>Contact Project Manager</a></li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Project Documents</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">System Requirement Spesification</a>
                            </li>
                            <li>
                                <a href="#">Final Documentation</a>
                            </li>
                        </ul>
                    </li>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->
                
               
            <div class="row">    
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Project</div>
                            <div class="panel-body">
                                
                                <?php $project_id = $pro['project_id']; ?>
                                
                                <div class="form-group">
                                    <label class="labels">Project ID  </label>
                                    <label><?php echo ": ".$project_id ?></label><br/>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Project Name  </label>
                                    <?php echo ": ".$pro['name']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Start Date  </label>
                                    <?php echo ": ".$pro['start_date']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Deadline  </label>
                                    <?php echo ": ".$pro['deadline']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Status  </label>
                                    <?php echo ": ".$pro['status']; ?>
                                </div>
                                                                 
                                <div class="form-group">
                                    <label class="labels">Description  </label>
                                    <?php echo ": ".$pro['description']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Languages  </label>
                                    <?php echo ": ".$pro['language']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Framework  </label>
                                    <?php echo ": ".$pro['framework']; ?>
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Project Progress</div>
                            <div class="panel-body" id="progress">
                            
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"  style="width:<?php echo $pro['project_progress']?>%"><b><font color="black" size="3"><?php echo $pro['project_progress']?>%</b>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                
                <?php 
                    if ($pro['team_id'] != 0) {
                ?>
                
                <div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Team</div>
                            <div class="panel-body" >
                                <div class="form-group">
                                    
                                    <style >
                                        .labels{width:150px;} 
                                    </style>
                                               
                                    <label class="labels">Team ID  </label>
                                    <label><?php echo ": ".$pro['team_id']; ?></label><br/>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">Team Name  </label>
                                    <?php echo ": ".$member['name']; ?>
                                </div>
                                
                                <div class="form-group">
                                    <label class="labels">No Of Members  </label>
                                    <label><?php echo ": ".$member['no_of_members']; ?></label><br/>
                                </div>

                                <div class="form-group">
                                    <label class="labels">Project Manager  </label>

                                    <?php  

                                        echo ": ".$project_manager['user_name']
                                    ?>

                                </div>

                                <div class="form-group">
                                    <label class="labels">Scrum Master  </label>

                                    <?php  

                                        echo ": ".$scrum_master['user_name'];
                                    ?>

                                </div>
                                
                                <label>Members</label><br/>
                                <table class="table table-bordered table-hover">
                                    
                                    <thead>
                                        <tr>
                                        
                                            <th>Full Name</th>
                                            <th>User Name</th>
                                          
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <?php 
                                            $team_id = $pro['team_id'];
                                            foreach($team_member as $t_mem): 
                                            $user_id = $t_mem['user_id'];
                                        ?>
                                        
                                            <tr>

                                                <td><?php echo $t_mem['full_name'];?></td>
                                                <td><?php echo $t_mem['user_name'];?></td>

                                            </tr>  
                                        <?php 
                                            endforeach;
                                            echo form_close();
                                        ?>
                                
                                    </tbody>
                                </table>
                                    
                                                
                                
                            </div>
                    </div>
                </div> 
                
                <?php 
                   }
                ?>
                        
            </div>
                
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>_include/Dashboard/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>_include/Dashboard/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>_include/Dashboard/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>_include/Dashboard/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>_include/Dashboard/js/plugins/morris/morris-data.js"></script>

</body>

</html>