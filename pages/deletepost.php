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
        
    global $con;
       
       $deleteFromUrl = $_GET['Delete'];
        $query = "DELETE FROM admin_panel WHERE id = '$deleteFromUrl'"; 
       
        $Execute = mysqli_query($con,$query);
       move_uploaded_file($_FILES["Image"]["tmp_name"], $Target);
if($Execute){
        $_SESSION["SuccessMessage"] = "Post Deleted Successfully";
        header("Location: dashboard.php"); 
    }
else{
        $_SESSION["ErrorMessage"] = "Failed To Delete Post";
            header("Location: dashboard.php"); 
        }
       
   
    
}

?>

<!DOCTYPE>

<html>
        <head>
            <title>Delete post</title>
           
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
<div class="container-fluid">
<div class="row">
        <div class="col-sm-2">
        
        <ul id="side_menu" class="nav nav-pills nav-stacked">
            <li><a href="dashboard.php"><span class="glyphicon glyphicon-th"></span>&nbsp; Dashboard</a> </li> 
            <li class="active"><a href="addnewpost.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp; Add New Post</a> </li> 
            <li><a href="categories.php"><span class="glyphicon glyphicon-tags"></span>&nbsp; Categories</a> </li> 
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; Manage Admins</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-comment"></span>&nbsp; Comments</a> </li>
            <li><a href="blog.php"><span class="glyphicon glyphicon-cloud"></span>&nbsp; Live Blog</a> </li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a> </li>
            
        </ul>
        
        </div>
<!-- end div for sidebar-->
    
        <div class="col-sm-10">
        <h1 class="headtext"> Delete Post</h1>
        <div><?php echo ErrorMessage(); echo SuccessMessage()?></div>
<div>
        <?php
        $con;
        $searchQueryParameter= $_GET["Delete"];
        $query = "SELECT * FROM admin_panel WHERE id ='$searchQueryParameter'";
        $executeQuery = mysqli_query($con,$query);
        
        while($datarow = mysqli_fetch_array($executeQuery)){
                $titleUpdate = $datarow["title"];
                $categoryUpdate = $datarow["category"];
                $imageUpdate = $datarow["image"];
                $postUpdate = $datarow["post"];
            
        }
    
    
    
        ?>
    <form method="post" action="deletepost.php?Delete=<?php echo $searchQueryParameter ?>" enctype="multipart/form-data">
        <fieldset>
        <div class="form-group">
            <label for="title"><span class="fieldinfo">Title:</span></label>
            <input value="<?php echo $titleUpdate; ?>" class="form-control" type="text" name="Title" placeholder="Title" id="title" />
        </div>
            <div class="form-group">
             <span class="fieldinfo">Existing Category:</span>
            <?php echo $categoryUpdate; ?>
            <br>
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
        <br>
<!--
        <div class="form-group">
            <label for="author"><span class="fieldinfo">Author:</span></label>
            <input class="form-control" type="text" name="Author" placeholder="Author" id="author" />
        </div> 
-->
        <div class="form-group">
            <span class="fieldinfo">Existing Image:</span>
            <img src="Upload/<?php echo $imageUpdate; ?>" width="170px" height="80px">
            <br>
            <label for="imageselect"><span class="fieldinfo">Image:</span></label>
            <input class="form-control" type="file" name="Image" placeholder="Image" id="imageselect"  />
        </div>
        <div class="form-group">
            <label for="post"><span class="fieldinfo">Post:</span></label>
            <textarea class="form-control" id="post" name="Post" placeholder="Post" ><?php echo $postUpdate; ?></textarea>
        </div> 
               
        </div>
        <br>
        <input type="submit" name="submit" class="btn btn-danger btn-block" value="Delete Post">
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
</div>
<div style="height:10px; background-color:#27AAE1"></div>
</body>




</html>