<?php 
require_once("includes/connect.php");
include("includes/session.php");
include("includes/functions.php");
?>
<!DOCTYPE>
<html>
<head>
            <title><?php echo $title; ?> </title>
            <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <script src="js/jquery-3.4.1.min.js" type="text/javascript"> </script>
            <script src="js/bootstrap.min.js" type="text/javascript"> </script>
            <link rel="stylesheet" href="css/publicstyles.css">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=1"/> 
<style>
.fieldinfo { color: rgb(251,174,44);
                             font-family: bold;
                             font-size: 1.2em;
                            }
                .comment-block {background-color:#f6f7f9; padding-right: 10px; }
                .comment-info {color: #365899;
                               font-family: system-ui;
                                font-weight: bold;
                                padding-top: 10px
                                }
                .comment {margin-top: -2px;
                        margin-bottom: 10;
                        font-size: 1.2em; 
                        font-family: monospace;
                        text-align: justify;
                    
                        /*padding-left: 90px;*/
                        }
</style>
</head>

<body>
    
<div class="jumbotron" >
    <div class="container">
        <ul class="navbar-left" style="margin-left:-60; margin-top:-40">
            <li style="font-size:16px; color: white;">Call Us Today! +44 20 8771 0919|info@ccccovenantparish.com
            </li>
        </ul>

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
             </button>   
          <a class="navbar-brand" href="blog.php">
                <img src="images/logo.png" width="230" height="180">
            </a>
        
        </div>
        <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right"  style="font-size:16px;margin-left:-60; margin-top:-255; color: white;">
            <li><a class="navtop">Location & Contact</a></li>
            <li><a class="navtop">Terms & Conditions</a></li>
            <li><a class="navtop">Privacy Policy </a></li>
        </ul>
        </div>
    </div>
</div>
 <div class="container"> 
    <nav class="menu" style="margin-top:-40;">
  <ol>
    <li class="menu-item"><a href="index.php">Home</a></li>
    <li class="menu-item"><a href="#index.php">Church Services </a></li>
    <li class="menu-item">
      <a href="#0">Bible Lessons</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Big Widgets</a></li>
        <li class="menu-item"><a href="#0">Bigger Widgets</a></li>
        <li class="menu-item"><a href="#0">Huge Widgets</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Community</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
    <li class="menu-item">
      <a href="#0">Shepards Corner</a>
      <ol class="sub-menu">
        <li class="menu-item"><a href="#0">Shishkabobs</a></li>
        <li class="menu-item"><a href="#0">BBQ kabobs</a></li>
        <li class="menu-item"><a href="#0">Summer kabobs</a></li>
      </ol>
    </li>
  </ol>  
</nav> <!--end of navigation bar-->
    <hr class="white">
 </div>   
<!--begining of cloud image; main body-->
<div class="container-fluid" >
  <div id="left" style="height: 52vh; margin-bottom:10px">
      <p>Welcome to</p>
      <p>Celestial Church of Christ</p>
        <br>
        <p>Covenant of God Parish</p>
</div>
  <div id="right" style="background-image: url('images/clouds.jpg'); background-repeat: no-repeat; height: 52vh; margin-bottom: 50px; background-size:cover"></div>
</div>
<!--start of main body-->
<br><br>
<div class="container-fluid" style="background:white;">
<br>
<h2 style="text-align: center; font-weight: bold; color:#333399">Celestial Church of Christ – Covenant of God Parish</h2>
<br>
<hr class="type_7" style="border:0; height: 55px; background-image: url(images/flower.png); background-repeat:no-repeat; margin-left:300px">

<div class="container">
    <div class="row"><!--begining of main grid-->
        <div class="col-md-9"> 
<div style="color:black;" class="comment-block">
        <img style="margin-left:5px; margin-top:10px; opacity: 0.6; margin-right: 5px" class="pull-left" src="images/logo.png" width="180px" height="150px">
            <p class="comment">Welcome to the glory of God, Celestial Church of Christ – Covenant of God Parish. Our parish was established in 1993 in South East London (UK).The Church was established by the will of the ALMIGHTY GOD in a two bedroom flat of Hon-Most-Evang. J. Femi OMOGBAI on Wednesday 20th of October 1993 with 17 members.

On Friday 22rd of October 1993 during the power day service, the name of the Church was given by spiritual revelation as “COVENANT OF GOD”.

The aim and objective of our church is to propagate the Ministry of Christ and to worship in Unity and Love. The Parish moved from the residence of Hon-Most-Evang. J. Femi Omogbai to Wheatsheaf Community Centre SW8 in 1994, and in 1995 we moved to 9 Brighton Terrace in Brixton SW9.Presently the LORD has blessed us with our own building which includes a vicarage situated at 12 St. Aubyn’s Road, Upper Norwood, LONDON SE19 3AD in 1997. This is to testify the promise of God fulfilled admist his true chosen ones. Therefore, dear brethren in Christ, join us to worship Christ together.</p>
    </div>
    </div><div>
        <div class="col-sm-3">
            <div class="container">
            <h3 style="text-align: center; font-weight: bold; color:#333399">Covenant 2016</h3>
            <img src="images/sideimg.jpg" width="250px" height="350px" class="zoom">
            </div>
            <br>
            <button class="button" style="margin-left:40px">FIND OUT MORE</button>
            </div>  
            <br>
        </div>
</div> <!-- end of main grid -->

<br>
</div>
    <hr class="type_7" style="border:0; height: 55px; background-image: url(images/flower.png); background-repeat:no-repeat; margin-left:300px">
</div>
  <!--second grid for images   -->
<div class="row" id="grid-headings">
    <div class="col-sm-2">
        <span >Our Services</span>
        <div class="container" style="color:black">
        <br>
         <img src="images/1.jpg" width="250px" height="270px" class="zoom">
        </div>
        <br>
        <a href="#" style="margin-left:90px"> <span class="btn btn-success">SERVICES</span></a>
    </div>   
    <div class="col-sm-offset-1 col-sm-2">
        <span>Bible Lessons</span>
        <div class="container" style="color:green">
        <br>
         <img src="images/2.jpg" width="250px" height="270px" class="zoom"> 
        </div>
        <br>
        <a href="#" style="margin-left:70px"> <span class="btn btn-success">BIBLE LESSONS</span></a>
    </div> 
    <div class="col-sm-offset-1 col-sm-2">
         <span>Our Doctrines</span>
        <div class="container" style="color:yellow">
        <br>
            <img src="images/3.jpg" width="250px" height="270px" class="zoom">        
        </div>
        <br>
        <a href="#" style="margin-left:90px"> <span class="btn btn-success"> DOCTRINES</span></a>
    </div> 
    <div class="col-sm-offset-1 col-sm-2">
        <span>Our Community</span>
        <div class="container">
        <br>
         <img src="images/4.jpg" width="250px" height="270px" class="zoom">
        </div>
        <br>
        <div class="col-sm-4 ">
            <a href="#" style="margin-left:90px"><button class="btn btn-success center-block">JOIN US</button></a>
            </div> 
    </div> 
</div>    
 <hr class="type_7" style="border:0; height: 55px; background-image: url(images/flower.png); background-repeat:no-repeat; margin-left:300px"> 
<br>

<div class="container" style="text-align:center; color: white;">
 <h2>A Brief History</h2>
<p>Celestial Church of Christ</p>  
 <br>   
  
The Celestial Church of Christ was founded by Samuel Joseph Bilewu Oschoffa, a former carpenter born in Dahomey ( Now the Republic of Benin) in 1909. Raised as Protestant (Methodism), he had a divine revelation on 27 May 1947, during a solar eclipse, in a forest where he was lost.

The Celestial Church of Christ is a spiritual church recognised world-wide in its unique way of worship, indivisible Holy Church, which came into the world from heaven by DIVINE ORDER through, on the 29th of September 1947 in Porto Novo, Republic of Benin, who was later called into God’s glory in 1985.

The Celestial Church of Christ (CCC) was recognized and authorized by the Republic of Benin in 1965.

From the late 1990s, this church has shown its willingness to use the Internet as a privileged means of evangelisation thus allowing the many existing branches of the church within the African Diaspora (United Kingdom, Germany, Austria, France and USA)
</div>
 <br>
<hr class="type_7" style="border:0; height: 55px; background-image: url(images/flower.png); background-repeat:no-repeat; margin-left:300px"> 
    
<div id="footer">
    <hr><p> Theme By | CodeLib | &copy;2019-2023 --- All right reserved.</p>
    <a style="color: white; text-decoration: none; cursor: pointer; font-weight: bold;" href="#">
    This is a demo site. Full license will be granted to whoever purchase this site.
    No one is allowed to copy other than <br>&trade; emjayz.com, thanks.
    </a>
</div>
<div style="height:10px; background-color:#27AAE1"></div>
</div>

 
    
    
    
    
</body>

</html>