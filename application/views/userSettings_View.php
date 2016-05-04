      

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Account Settings
                            <small>Edit your Account here</small>
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

				
				
				
				<a href="<?php echo base_url();?>DashBoardController/changeUserDetails">
                <p><button type="button" class="btn btn-lg btn-default">Change User Details</button></p></a>
				<p><button type="button" class="btn btn-lg btn-default">Change Account Type</button></p>
				<p><button type="button" class="btn btn-lg btn-default">Privacy Settings</button></p>
				<a href="<?php echo base_url();?>DashBoardController/loadchangePassword">
				<p><button type="button" class="btn btn-lg btn-default">Change Password</button></p>
				<p><button type="button" class="btn btn-lg btn-default">Deactivate Account</button></p>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
