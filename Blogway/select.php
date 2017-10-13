<?php 
include 'connection.php';

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog Website</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Multi Profile
        http://www.templatemo.com/preview/templatemo_457_multi_profile
        -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/templatemo-style.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="shortcut icon" href="img/images.png">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<style>
.add{width: 100%;}
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      margin: auto;
  }
.sidewala{
    background-color: #f1f1f1;
}

.item img{
    margin-top:5px;
    width: 100%;
}
.bod{
    padding-top:20px;
}
.verticalnav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #f1f1f1;
    overflow: auto;
}

.verticalnav li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

.verticalnav li a.active {
    background-color: #0066CC;
    color: white;
}

.verticalnav li a:hover:not(.active) {
    background-color: #555;
    color: white;
}

.add img{
	margin-top:5px;
	max-width: 100%;
}
</style>
</head>


<body class="templatemo-container">

        <!-- header -->
        <div class="header-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 site-name-container">
                        <img src="img/logo.png" alt="Site logo" class="site-logo">
                        <h1 class="site-name">Blogway</h1>
                    </div>
                    <div class="col-lg-9 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="profile.html">profile</a></li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="blog.html" class="active">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <div style="margin-left: 0px; float: left; width: 100%; height: 100%;">
            <div class="sidewala" style="float: left; width:15%;height: 100%;">
                <div class="verticalnav">
                    <ul>
                        <li><a href="blog.php">My Blogs</a></li>
                        <li><a href="addnewblog.php">Add new blogs</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>

                    <div class="add">
                    
                        <br>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a href="#"><img src="img/1.jpg"></a>
                                </div>

                                <div class="item">
                                    <a href="#"><img src="img/2.jpg"></a>
                                </div>
    
                                <div class="item">
                                    <a href="#"><img src="img/3.jpg"></a>
                                </div>

                                <div class="item">
                                    <a href="#"><img src="img/4.jpg"></a>
                                </div>
                            </div>
                            </div>
                    </div>            
            
            </div>
       
            <div class = "col-lg-10" style="float: left;">
                <div class="bod"><h1>
                    
                        <?php
                        $id=$_GET['id'];
                        $query="select * from blogtable where ID ='$id'";
                        $result=mysql_query($query);
                        while($datas=mysql_fetch_array($result)){
                        echo $datas['BlogTitle'];
                    	}
                        ?>
                        </h1>

                        <?php
                        $id=$_GET['id'];
                        $query="select * from blogtable where ID = '$id'";
                        $result=mysql_query($query);
                        while($datas=mysql_fetch_array($result)){
                        echo "&nbsp";
                        echo $datas['Content'];
                        }
                    ?>
                   
                </div>   
            </div>
        </div>
    </body>
</html>

