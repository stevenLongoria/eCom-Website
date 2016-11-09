<!DOCTYPE html>
<?php session_start();?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrative Access</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include 'includes/header.php';

?>

<br>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-12">
								<h5><span class="glyphicon glyphicon-user"></span> Admin Login</h5>
							</div>
						</div>
					</div>
				</div>
                
				<div class="panel-body">
                
                      
                          <div class="modal-header">
                              <h4 class="modal-title" id="myModalLabel">Login to make changes</h4>
                          </div>
                          
                          <div class="modal-body" id="adminLogin">
                              <div class="row">
                                  <div class="col-xs-6">
                                      <div class="well">
                                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                                              <div class="form-group">
                                                  <label for="username" class="control-label">Username</label>
                                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div class="form-group">
                                                  <label for="password" class="control-label">Password</label>
                                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                  <span class="help-block"></span>
                                              </div>
                                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                              <div class="checkbox">
                                                  <label>
                                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                                  </label>
                                                  <p class="help-block">(if this is a private computer)</p>
                                              </div>
                                              <button type="submit" class="btn btn-success btn-block">Login</button>
                                              <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                                          </form>
                                      </div>
                                  </div>
                                  
            				</div><!--END ROW-->
        				</div><!--END LOGIN BODY-->   
			</div><!--END PANEL BODY-->
        </div>
		</div>
    </div> 
</div><!--END CONTAINER-->
                    
					
                    
                    
                    
                    
                    
                    
                    

 	<div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Luminositech 2016 - This site is not official and is an assignment for a UCF Digital Media course</p>
				</div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
