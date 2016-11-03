<?php 
ob_start(); 
?>
<?php
	if(isset($_GET['querey'])){
		header("Location: http://sulley.cah.ucf.edu/~dig4530c_012/steven_edits/search_results.php?query=".$_GET['querey']."");
		ob_end_flush();
		exit();
	}
?>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="top-nav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
			
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">
                <img src="img/logo.png" class="img-fluid" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    
                        
                        <li class="dropdown">
                          
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="catalogue.php">All Products</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Photo Editing</a></li>
                            <li><a href="#">Video Editing</a></li>
                            <li><a href="#">Office</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Sale</a></li>
                          </ul>
                        </li>
        
                   
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="cart.php"><div class="glyphicon glyphicon-shopping-cart"></div></a>
                    </li>
                    <li>
                        <a href="client.php"><div class="glyphicon glyphicon-user"></div></a>
                    </li>
                    <li>
                        <a href="admin.php"><div class="glyphicon glyphicon-warning-sign"></div></a>
                    </li>
                    <li>
                            <form class="navbar-form navbar-left" role="search" name="search" action="search_results.php" method="GET">
                                <div class="form-group">
									<input type="text" class="form-control" placeholder="Search" name="query">
                                </div>
                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                    </li>
                </ul>
                
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
