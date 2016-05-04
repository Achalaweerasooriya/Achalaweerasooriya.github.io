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
    
    <!--<link href=”views/admin/css/datepicker.css” rel=”stylesheet”>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
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
                        <a href="<?php echo base_url(''); ?>DashBoardController/redirectToPages/home"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(''); ?>DashBoardController/PMViewProjects"><i class="fa fa-fw fa-bar-chart-o"></i> On-Going Projects</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Projects BackLog</a>
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
                                <a href="<?php echo base_url(''); ?>AddSprint_Controller/index">Add New Sprint</a>
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

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->
                
                <!-- /.row -->
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Create Project</div>
                            <div class="panel-body">                                
                              
                                <?php echo form_open('CreateProject/add_project',['method'=>'post']); ?>
                                
                                <div class="form-group">
                                    <label>Project Name</label><br/>
                                        <?php echo form_input('name', set_value('name','')); ?>
                                        <font color="#ff0000"><?php echo form_error('name'); ?></font>
                                </div>
                                
                                <div class="form-group">
                                    <label>Start Date</label><br/>
                                        <input  type="date"  id="start_date"  name="start_date">
                                        <font color="#ff0000"><?php echo form_error('start_date'); ?></font>
                                </div>
                                
                                <div class="form-group">
                                    <label>Deadline</label><br/>
                                        <input  type="date"  id="deadline"  name="deadline">
                                        <font color="#ff0000"><?php echo form_error('deadline'); ?></font>
                                </div>
                               
                                <div class="form-group">
                                    <label>Description</label>
                                        <?php echo form_textarea('description', set_value('description','')); ?>
                                        <font color="#ff0000"><?php echo form_error('description'); ?></font>
                                </div>
                                
                                <div class="form-group">
                                    <label>Languages</label><br/>
                                        <?php
                                  
                                            $options = array(
                                                'select'    => 'Select a language',
                                                'C#'        => 'C#',
                                                'Java'      => 'Java',
                                                'PHP'       => 'PHP' 
                                            );
                                  
                                            echo form_dropdown('language', $options);
                                        ?>
                                        <font color="#ff0000"><?php echo form_error('language'); ?></font>
                                </div>
                                                                  
                                <div class="form-group">
                                    <label>Framework</label><br/>
                                        <?php
                                  
                                        $options = array(
                                            'select'       => 'Select a framework',
                                            '.NET'         => '.NET',
                                            'Codeigniter'  => 'Codeigniter',
                                            'Laravel'      => 'Laravel'
                                        );
                                  
                                        echo form_dropdown('framework', $options);
                                        ?>
                                        <font color="#ff0000"><?php echo form_error('framework'); ?></font>
                                </div>
                                
                                <div class="form-group">
                                    <label>Client</label><br/>
                                        <?php echo form_input('client', set_value('client',''));?>
                                        <font color="#ff0000"><?php echo form_error('client');?></font>
                                </div> 
                                  
                                 
                            </div>
                                
                    </div>
                                
                    <?php echo form_submit('create','Create'); ?>
                        
                    <input type="reset" class="btn btn-primary"name="btnReset" id="btnReset" value="Reset" onclick="window.location.href='<?php echo base_url() ?>createproject'" />
                                
                    <?php echo form_close(); ?>
                              
                                
                                
                </div>
            </div>
        </div>
                
        <div class="row">
                  <!-- /#page-wrapper -->
        <div></div>
        
        </div>
    <!-- /#wrapper -->

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
