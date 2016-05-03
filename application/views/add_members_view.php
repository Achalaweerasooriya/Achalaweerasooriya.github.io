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
    
<style>
    #anchorTag{color:#000;}
</style>

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
                        <a href="<?php echo base_url(''); ?>CreateTeam"><i class="fa fa-fw fa-table"></i> Create Team</a>
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

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->

         
                <!-- /.row -->
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Team</div>
                            <div class="panel-body">
                             
                                <?php $team_id = $this->uri->segment(3);?>
                              
                                <?php echo form_open("CreateTeam/edit_team/$team_id",['method'=>'post']);?>                                
                                
                                    <div class="form-group">
                                        <label>Team Name</label><br/>
                                        <?php echo form_input($name); ?>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>No Of Members</label><br/>
                                        <label><?php echo $member['no_of_members'] ?></label><br/>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Project</label><br/>
                                  
                                        <?php  
                                             
                                            $proj = array("Select Project");
                                            foreach($project as $p){
                                                $proj[$p->project_id]=$p->name;
                                            }
                                            echo form_dropdown('project', $proj, $project_id['project_id']);
                                            
                                            
                                        ?>
                                   
                                        <font color="#ff0000"><?php echo form_error('project');?></font>
                                    </div>
                                
                                    <div class="form-group">
                                        <?php  
                                            if (count($team_member) > 0) { 
                                        ?>
                                        
                                        <label>Scrum Master</label><br/>
                                  
                                        <?php  
                                             
                                                $sm = array("Select Scrum Master");
                                                foreach($team as $p){
                                                    $sm[$p->user_id]=$p->user_name;
                                                }
                                                echo form_dropdown('scrum', $sm, $member['scrum_master']);
                                        ?>
                                        <font color="#ff0000"><?php echo form_error('scrum');?></font>
                                    </div>
                                
                                <table class="table table-bordered table-hover">
                                    
                                    <thead>
                                        <tr>
                                        
                                            <th>Full Name</th>
                                            <th>User Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php 
                                            $team_id = $this->uri->segment(3);
                                        
                                            foreach($team_member as $t_mem): 
                                            $user_id = $t_mem['user_id'];
                                        
                                            echo form_open("createteam/create/$team_id/$user_id",['method'=>'post']);
                                            
                                        ?>
                                        
                                                <tr>
                                        
                                                    <td><?php echo $t_mem['full_name']?></td>
                                                    <td><?php echo $t_mem['user_name']?></td>
                                    
                                                    <td><button>
                                                        <?php 
                                                            echo anchor('team/remove/'.$team_id.'/'.$user_id.'/'.(int)$project_id['project_id'], 'Remove', array('id'=>"anchorTag",'onClick' => "return confirm('Are you sure you want to delete?')"));
                                                        ?>
                                                        </button></td>
                                                </tr>
                                    
                                        <?php 
                                            endforeach; }
                                            echo form_close();
                                        ?>
                                    </tbody>
                                </table>
                                
                                    <button type="submit" class="btn btn-default" onclick="window.location.href='<?php echo base_url()?>CreateTeam/edit_team/<?php echo $team_id?>'">Done</button>
          
                                    <input type="button" class="btn btn-primary"name="btnBack" id="btnBack" value="Back" onclick="window.location.href='<?php echo base_url() ?>CreateTeam'" />
                                     
                                    <?php echo form_close();?>
                                    
                            </div>
                    </div>
                    
                    <div class="panel panel-primary">
                        <div class="panel-heading">Assign Members</div>
                            <div class="panel-body">                           
                                <div class="form-group">
                                  
                                    <?php if (count($developer) > 0) { ?>
                                    
                                    <table class="table table-bordered table-hover">
                                        
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>Full Name</th>
                                                <th>User Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                    
                                            <?php 
                                                foreach($developer as $dev): 
                                                $user_id = $dev['user_id'];
                                    
                                            ?>
                                    
                                                <tr>
                                                    <td><?php echo $dev['user_id']?></td>
                                                    <td><?php echo $dev['full_name']?></td>
                                                    <td><?php echo $dev['user_name']?></td>
                                        
                                                    <td><button type="submit" class="btn btn-default" onclick="window.location.href='<?php echo base_url()?>team/add/<?php echo $team_id?>/<?php echo $user_id?>'">Add</button></td>
                                                </tr>
                                    
                                            <?php endforeach; }?>
                                    
                                        </tbody>
                                    </table>
                                  
                                </div>
                            </div>
                    </div>
                </div>
                
                <div class="row">
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


