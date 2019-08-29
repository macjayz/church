<?php
require_once("include/connect.php");
include("include/session.php");
include("include/functions.php");

if(isset($_POST["submit"])){
$Title = mysqli_real_escape_string($con,$_POST["Title"]);
$Category = mysqli_real_escape_string($con,$_POST["Category"]);
$Post = mysqli_real_escape_string($con,$_POST["Post"]);
date_default_timezone_set("Africa/Lagos");
$currenttime = time();
$dateTime = strftime("%d-%B-%Y %H:%M:%S",$currenttime);
$dateTime;
$Admin = "Machen John";
$Image = $_FILES["Image"]["name"];
$Target = "Upload/".basename($Image);
    if(empty($Title)){
    $_SESSION["ErrorMessage"] ="Title can't be empty";
    redirect_to("addnewpost.php");
    
    }
    elseif(strlen($Title)<2){
    $_SESSION["ErrorMessage"] = "Title should be at-least 2 characters";
    redirect_to("addnewpost.php");
    }
   else{
        global $con;
        $query = "INSERT INTO admin_panel(datetime, title, category, author, image, post) VALUES('$dateTime','$Title','$Category', '$Admin', '$Image', '$Post')";   
        $Execute = mysqli_query($con,$query);
       move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);
        if($Execute){
            $_SESSION["SuccessMessage"] = "New Post Added Successfully";
            redirect_to("addnewpost.php"); 
        }
        else{
            $_SESSION["ErrorMessage"] = "Failed To Add New Post";
            redirect_to("addnewpost.php"); 
        }
       
   }
    
}

?>

<!DOCTYPE>

<html>
        <head>
            <title>Add New Post</title>
           
            <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <script src="js/jquery-3.4.1.min.js" type="text/javascript"> </script>
            <script src="js/bootstrap.min.js" type="text/javascript"> </script>
            <link rel="stylesheet" href="css/adminstyles.css">
            
            <style>
                .fieldinfo{
                    color: #008ae6;
                    font-family: cursive;
                    font-size: 1.2em;
                }
                .headtext{
                    color: #009933;
                    font-weight: bold;
                    font-family: cursive;
                }
            </style>
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
            <li><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Dashboard</a> </li> 
            <li class="active"><a href="addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Post</a> </li> 
            <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp; Categories</a> </li> 
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admins</a> </li>
            <li><a href="comment.php"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments</a> </li>
            <li><a href="blog.php"><span class="glyphicon glyphicon-cloud"></span>&nbsp; Live Blog</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a> </li>
            
        </ul>
        
        </div>
<!-- end div for sidebar-->
    
        <div class="col-sm-10">
        <h1 class="headtext"> Add New Post</h1>
        <div><?php echo ErrorMessage(); echo SuccessMessage()?></div>

<div>
    <form method="post" enctype="multipart/form-data">
        <fieldset>
        <div class="form-group">
            <label for="title"><span class="fieldinfo">Title:</span></label>
            <input class="form-control" type="text" name="Title" placeholder="Title" id="title" />
        </div>
            <div class="form-group">
            <label for="categoryselect"><span class="fieldinfo">Category:</span></label>
            <select class="form-control" id="categoryselect" name="Category">
               <?php 
            global $con;
            $viewquery = "SELECT * FROM category ORDER BY datetime desc";
            $Execute = mysqli_query($con,$viewquery);
            $sno = 0;
    
            while($datarows = mysqli_fetch_array($Execute)){
                $CategoryName = $datarows["name"];
               echo '<option>'.$CategoryName.'</option>';
            } 
            
        ?>      
                </select> 
        
        <div class="form-group">
            <label for="imageselect"><span class="fieldinfo">Image:</span></label>
            <input class="form-control" type="file" name="Image" placeholder="Image" id="imageselect"  required/>
        </div>
        <div class="form-group">
            <label for="post"><span class="fieldinfo">Post:</span></label>
            <textarea class="form-control" id="post" name="Post" placeholder="Post" ></textarea>
        </div> 
               
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-success btn-block" value="Add New Post">
        </fieldset>
        <br>
    </form>
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