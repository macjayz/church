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
            <li><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Home Settings</a> </li>
            <li class="active"><a href="#"><span class="glyphicon glyphicon-th"></span>&nbsp; Menus</a> </li>
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
        <h1 class="headtext" style="font-family: cursive; color: green; font-weight:bold;"> Navigation Menus</h1>
        <hr>
            
        <div class="table-responsive">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Menu Name</th>
                <th>Action</th>
            </tr>
<?php  
 $con;
 $query = "SELECT id,menus FROM homepage";
 $execute = mysqli_query($con,$query);
while($datarow = mysqli_fetch_array($execute)){
    $id = $datarow["id"];
    $menus = $datarow["menus"];
            
 ?>
            <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $menus ?></td>
            <td><a href="#"><span class="btn btn-warning">Edit</span></a>
                <a href="#"><span class="btn btn-danger">Delete</span></a></td>
            </tr>
<?php } ?>
        </table>
        </div>
            
        </div>
        <div><?php echo ErrorMessage(); echo SuccessMessage(); ?></div>
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