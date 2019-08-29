<?php
require_once("../includes/connect.php");
include("../includes/session.php");
include("../includes/functions.php");

if(isset($_POST["submit"])){
$category = mysqli_real_escape_string($con,$_POST["category"]);
date_default_timezone_set("Africa/Lagos");
$currenttime = time();
$dateTime = strftime("%d-%B-%Y %H:%M:%S",$currenttime);
$dateTime;
$admin = "Machen John";
    if(empty($category)){
    $_SESSION["ErrorMessage"] ="all field must be filled out";
    redirect_to("categories.php");
    
    }
    elseif(strlen($category>99)){
    $_SESSION["ErrorMessage"] = "Name Too Long For Category";
    redirect_to("categories.php");
    }
   else{
        global $con;
        $query = "INSERT INTO category(datetime, name, creatorname) VALUES('$dateTime','$category','$admin')";   
        $Execute = mysqli_query($con,$query);
        if($Execute){
            $_SESSION["SuccessMessage"] = "Category Added Successfully";
            redirect_to("categories.php"); 
        }
        else{
            $_SESSION["ErrorMessage"] = "Failed To Add Category";
            redirect_to("categories.php"); 
        }
       
   }
    
}

?>

<!DOCTYPE>

<html>
        <head>
            <title>Categories</title>
            
            <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
            <script src="../js/jquery-3.4.1.min.js" type="text/javascript"> </script>
            <script src="../js/bootstrap.min.js" type="text/javascript"> </script>
            <link rel="stylesheet" href="../css/adminstyles.css">
            
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
            <li><a href="addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Post</a> </li> 
            <li class="active"><a href="categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp; Categories</a> </li> 
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admins</a> </li>
            <li><a href="comment.php"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-cloud"></span>&nbsp; Live Blog</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a> </li>
            
        </ul>
        
        </div>
<!-- end div for sidebar-->
    
        <div class="col-sm-10">
        <h1 class="headtext"> Manage Categories</h1>
        <div><?php echo ErrorMessage(); echo SuccessMessage()?></div>

<div>
    <form method="post"  >
        <fieldset>
        <div class="form-group">
            <label for="categoryname"><span class="fieldinfo">Name:</span></label>
            <input class="form-control" type="text" name="category" placeholder="name" id="categoryname" />
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-success btn-block" value="Add New Category">
        </fieldset>
        <br>
    </form>
</div>
        
        <div >
            <table class="table table-striped table-hover">
            <tr class="success">
                <th>Sr No</th>
                <th>Date</th>
                <th>Category Name</th>
                <th>Creator Name</th>
            </tr>
                
        <?php 
            global $con;
            $viewquery = "SELECT * FROM category ORDER BY datetime desc";
            $Execute = mysqli_query($con,$viewquery);
            $sno = 0;
    
            while($datarows = mysqli_fetch_array($Execute)){
                $id = $datarows["id"];
                $date = $datarows["datetime"];
                $name = $datarows["name"];
                $creator = $datarows["creatorname"];
                $sno++;
                
                echo "<tr>";
                echo "<td>".$sno."</td>";      
                echo "<td>".$date."</td>"; 
                echo "<td>".$name."</td>";
                echo "<td>".$creator."</td>"; 
                echo "</tr>";
            } 
            
        ?>        
            </table>
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
    No one is allowed to copy other than <br>&trade; emjayz.com, thanks.
    </a>
</div>
<div style="height:10px; background-color:#27AAE1"></div>
</body>




</html>