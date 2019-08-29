<?php 
require_once("../includes/connect.php");
include("../includes/session.php");
include("../includes/functions.php");
?>
<!DOCTYPE>

<html>
        <head>
            <title>Homepage Settings</title>
           
            <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
            <script src="../js/jquery-3.4.1.min.js" type="text/javascript"> </script>
            <script src="../js/bootstrap.min.js" type="text/javascript"> </script>
            <link rel="stylesheet" href="../css/adminstyles.css">
        </head>

<body>
        <div style="height:10px; background-color:#27AAE1;"></div>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="blog.php">
                <img src="images/cmslogo.png" width="170" height="20" >
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav" style="color:#fff">
                <li class="active"><a href="dashboard.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Features</a></li>
            </ul>
            <form action="dashboard.php" class="navbar-form navbar-right">
                <div class="form-group">
                <input type="search" placeholder="search" name="search" class="form-control">
                </div>
                <button class="btn btn-default" name="searchButton">Go</button>
            </form>
            </div>
        </div>
    </nav>
    <div style="height:10px; background-color:#27AAE1; margin-top: -20px"></div>
<div class="container">
<div class="row">
        <div class="col-sm-2">
        <br>
        <ul id="side_menu" class="nav nav-pills nav-stacked">
            <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Home Settings</a> </li>
            <li><a href="menus.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Menus</a> </li>
            <li><a href="addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Post</a> </li> 
            <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp; Categories</a> </li> 
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admins</a> </li>
            <li><a href="comment.php"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments</a> </li>
            <li><a href="blog.php"target="_blank"><span class="glyphicon glyphicon-cloud"></span>&nbsp; Live Blog</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a> </li>
            
        </ul>
        
        </div>
<!-- end div for sidebar-->
    
        <div class="col-sm-10">
        <div class="menuborder">
        <h1 class="headtext" style="font-family: cursive; color: green; font-weight:bold;"> Admin Dashboard</h1>
        <hr>
        <div><?php echo ErrorMessage(); echo SuccessMessage(); ?></div>
<div class="table-responsive">          
<table class="table table-striped table-hover">
    <tr class="danger">
    <th>Title</th>
    <th>Category</th>
    <th></th>
    <th>Action</th>
    <th>Details</th>
    </tr>
        

<?php 
 $con;
if(isset($_GET["searchButton"])){
            $search = $_GET["search"];
        $viewquery = "SELECT * FROM admin_panel WHERE datetime LIKE '%$search%' OR
        title LIKE '%$search%' OR category LIKE '%$search%' OR post LIKE '%$search%'";      
        }
else {
$viewquery = "SELECT * FROM homepage";}
$Execute = mysqli_query($con,$viewquery);
$Srno = 0;

$datarows = mysqli_fetch_array($Execute);
    $id=$datarows["id"];
    $logo=$datarows["logo"];
    $welcome=$datarows["welcome"];
    $topimage=$datarows["topimage"];
    $image1=$datarows["image1"];
    $image2=$datarows["image2"];
    $image3=$datarows["image3"];
    $image4=$datarows["image4"];
    $menus= $datarows ["menus"];
    $Srno++;

?>
   <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Welcome Message</td>
    <td><?php echo $welcome ?></td>
    <td></td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 
    <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Top Image</td>
    <td><img src="../images/<?php echo $topimage; ?>" width="150px" height="60px"> </td>
    <td>Upload</td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 
    <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Image 1</td>
    <td><img src="../images/<?php echo $image1; ?>" width="150px" height="60px"> </td>
    <td>Upload</td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 
    <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Image 2</td>
    <td><img src="../images/<?php echo $image2; ?>" width="150px" height="60px"> </td>
    <td>Upload</td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 
    <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Image 3</td>
    <td><img src="../images/<?php echo $image3; ?>" width="150px" height="60px"> </td>
    <td>Upload</td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 
    <tr class="success" style="font-size:12px;">
    <td style="color:blue;">Image 4</td>
    <td><img src="../images/<?php echo $image4; ?>" width="150px" height="60px"> </td>
    <td>Upload</td>
    <td><a href="#"><span class="btn btn-warning">Edit</span></a>
    <a href="#"><span class="btn btn-danger">Delete</span></a></td>
    <td><a href="#" target="_blank"><span class="btn btn-primary">Live Preview</span></a></td>
    </tr> 

    </table>
    <br>
        </div>
        </div>
        </div>
    <!-- end div for main area-->
</div><!-- end div for row-->
</div><!-- end div for container-->
   
    <!--   footer -->
<div id="footer">
    <hr><p> Theme By | Machen John | &copy;2019-2023 --- All right reserved.</p>
    <a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="#">
    This is a demo site. Full license will be granted to whoever purchase this site.
    No one is allowed to copy other than <br>&trade; emjayz.com &trade; thanks.
    </a>
    <hr>
</div>
<div style="height:10px; background-color:#27AAE1"></div>
</body>




</html>