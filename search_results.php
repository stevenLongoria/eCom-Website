<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luminositech | Search Results</title>

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
<?php
	$username = "dig4530c_012";
	$password = "knights123!";

	$connection = mysql_connect("localhost" , "$username" , "$password");  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
	mysql_select_db("dig4530c_012" , $connection);
	
	if(isset($_GET['query'])){
		$query = $_GET['query'];
		//-query  the database table 
		$sql="SELECT * FROM products WHERE  product_name LIKE '%" . $query . "%' OR product_category LIKE '%" . $query  ."%'"; 
		$result = mysql_fetch_assoc(mysql_query("$sql"));
	} 
?>
<!-- Page Content -->
    
    <article class="container">
    
   

        <!-- Page Header -->
        <article class="row">
            <article class="col-lg-12">
                <h1 class="page-header">Products
                    <?php 
						if(isset($_GET['query'])){
							echo("<small>Search Results for '".$query."'</small>");
						}
					?>
                </h1>
            </article>
        </article>
        <!-- /.row -->

        <!-- Projects Row -->
		<?php
			//for($i=0; $i<$result.length; $i++){

		?>
        <article class="row">
            <article class="col-md-4 portfolio-item">
					<?php 
						if(isset($_GET['query'])){
							echo("<a href='#'><img class='img-responsive' src='".$result['product_img_url']."' alt='no result found'/></a>");
						}
					?>
                <h3>
                    <?php
						if(isset($_GET['query'])){
							echo("<a href='#'>".$result['product_name']."</a>");
						}
					?>
                </h3>
					<?php 
						if(isset($_GET['query'])){
							echo("<p>".$result['product_description']."</p>");
						}
					?>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product2.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Autodesk Maya 2017</a>
                </h3>
                <p>Maya offers a wide renge of tools for 3D animation, rendering, modeling, simulation, and compositing.</p>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product3.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Pinnacle Studio 20 Ultimate</a>
                </h3>
                <p>Pinnacle Studio 20 Ultimate has the editing tools to take your videos to a professional levels.  Composite shots with Montage Themes and Chroma Key, stitch scenes together with split and merge, and make your videos come alive with Transitions and Effects.</p>
            </article>
        </article>
        <!-- /.row -->

        <!-- Projects Row -->
        <article class="row">
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product4.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Sony Vegas Pro</a>
                </h3>
                <p>Sony Vegas is a powerful video editing and processing software for Windows systems. Benefits from not requiring specific hardware to run.</p>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product5.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Adobe Lightroom </a>
                </h3>
                <p>Lightroom has the power to enhance your photos more than ever before - Punch up colors, make dull-looking shots vibrant, remove distracting objects and straighten skewed shots. Plus, the latest release includes powerful new ways to adjust atmospheric haze, create incredible HDR images and panoramas, import and edit faster, and so much more.</p>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product6.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Autodesk AutoCAD</a>
                </h3>
                <p>AutoCAD is a powerful computer aided design and drafting software used commercial and non-commercial engineering applications. </p>
            </article>
        </article>

        <!-- Projects Row -->
        <article class="row">
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product7.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Office Home & Business 2016</a>
                </h3>
                <p>All the essentials for home and small businesses are included such as Word, Excel, PowerPoint, OneNote, and Outlook. Installs on 1 system.</p>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product8.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Office Professional 2016</a>
                </h3>
                <p>Make work efficient with Office. Essential for users that only require Outlook, Publisher, and Access for one system.</p>
            </article>
            <article class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/product9.jpg" alt="">
                </a>
                <h3>
                    <a href="#">Office Home & Student 2016 for Mac</a>
                </h3>
                <p>Fully install Office programs on your Mac, optimized user experience trhough tablets and phones, and 1TB of OneDrive cloud storage. Posses the power and flexibility to accomplish your work virtually anywhere.</p>
            </article>
        </article>
        <!-- /.row -->

        <!-- Pagination -->
        <article class="row text-center">
            <article class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </article>
        </article>
        <!-- /.row -->

    </article>


    <article class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <article class="row">
                <article class="col-lg-12">
                    <p>Copyright &copy; Luminositech 2016 - This site is not official and is an assignment for a UCF Digital Media course</p>
                </article>
            </article>
        </footer>

    </article>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
     <!-- Bootstrap Core JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
