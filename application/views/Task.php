
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://localhost/ci3/ci/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/ci3/ci/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="http://localhost/ci3/ci/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://localhost/ci3/ci/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="index.html">SupremePM</a>
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
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="Projects.html"><i class="fa fa-fw fa-bar-chart-o"></i> Projects</a>
                    </li>
                    <li>
                        <a href="Schedule.html"><i class="fa fa-fw fa-table"></i> Schedule</a>
                    </li>
                    <li>
                        <a href="Reports.html"><i class="fa fa-fw fa-edit"></i>Reports</a></li>
                
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Calander</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Company Profile</a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                                <li>
                        <a href="users.html"><i class="fa fa-fw fa-edit"></i>Users</a></li>
                              <li>
                        <a href="pa.html"><i class="fa fa-fw fa-edit"></i>Project Administration</a></li>
                
                    <li>
              
                
                    <li>
        
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            SUPREME <small>Complete Agile Project Management Solution  </small>
                        </h1>
                       <h3>My Tasks</h3> 
                       
                         <div class="table-responsive">
                           <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th >Task</th>
                                        <th >Created</th>
                                        <th>Status</th>
                                        <th>Progress</th>
                                        <th>Comments</th>
                                        <th>Edit</th>
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($tasks as $t){
                                        $taskid = $t['task_id'];?>
                                    <tr>
                          
                                        <td><?php echo $t['task'] ?></td>
                                        <td><?php echo $t['created'] ?></td>
                                        <td><?php echo $t['status'] ?></td>
                                        <td width="12%"><?php  $val3 = $t['status']; echo $val3 ?><br>
                                             <?php if($val3== "Done" ){
                                                echo '<input type="checkbox" id="completed" name="completed[]" value="2" onchange="funcCheckbox()"/>'?>
                                            <br/><small>Mark as completed</small>                                                                                        
                                            <?php  } //else   echo '<input type="checkbox" id="completed" name="completed[]" value="2" onchange="funcCheckbox() disabled="disabled"  onclick="return false"/>' ?> </td>
                                        <td><?php echo $t['comments'] ?></td>
                                    
                                        <td><a href= <?php echo base_url()."ManageTask_Controller/edit_task/"?><?php echo $taskid ?>><strong>Edit</strong></a></td>
                                    </tr>                                                          
                                </tbody>
                                  <?php }?>
                            </table>
                        </div>
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
                           
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="http://localhost/ci3/ci/admin/js/plugins/morris/raphael.min.js"></script>
    <script src="http://localhost/ci3/ci/admin/js/plugins/morris/morris.min.js"></script>
    <script src="http://localhost/ci3/ci/admin/js/plugins/morris/morris-data.js"></script>

</body>

</html>
