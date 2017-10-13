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
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  


        <link rel="shortcut icon" href="img/images.png">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!--pagination-->
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="paginate.js" type="text/javascript"></script> 
        <script src="jssor_slider1.js" type="text/javascript"></script>
        <style>
        .head{
            margin-top: 20px;
        }
        .head img{
            width: 200px;
            min-height: 200px;
            max-height: 200px;
            display: inline;
            margin: 5px;
        }
    </style>
</head>

<body>
<?php include'connection.php';
if(isset($_POST["submit"])&& $_POST["submit"]=="submit"){
    $category=$_POST['categoryname'];

    if(isset($_FILES['upload'])){
        $uploadname=$_FILES['upload']['name'];
        $uploadname=mt_rand(100000,999999). $uploadname;
        $uploadtemp=$_FILES['upload']['tmp_name'];
        $uploadtype=$_FILES['upload']['type'];
        $filesize=$_FILES['upload']['size'];
    
        $uploadname= preg_replace("#[^a-z0-9.]#i","",$uploadname);
    
        //file size upto 11 mb only//
        if(($filesize > 11000000)){
            die("ERROR:FILE to big");
        }
        if(!$uploadtemp){
            die("no file selected");
        }               
        
    }   
    $query="INSERT INTO imagegallery(PictureName,Category) VALUES('$uploadname','$category')";
    $result=mysql_query($query);

    
    if(mysql_error()){
            echo mysql_error();
    
                    }
        else{
        move_uploaded_file($uploadtemp,"$uploadname");
        echo '<div style="margin-top: 90px; margin-bottom: 5px;" align="center" class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Successfully</strong> uploaded image
            </div>';
        }
    }
?>
<div>
<div class="container-fluid">
    <div class="row-fluid">
     <div class="header-bg navbar-fixed-top" style="position: fixed; overflow: hidden;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 site-name-container">
                        <!--<img src="img/logo.png" alt="Site logo" class="site-logo">-->
                        <h1 class="site-name">Blogway</h1>
                    </div>
                    <div class="col-lg-9 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="imagegallery.php" class="active">My Photography</a></li>
                                <li><a href="blog.php">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid" style="margin-top: 100px;">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>
        <a href="myblog.php"> Go back... </a>
    </div>

    <div class="row-fluid">
    <div class="col-lg-12 thumbnail head">
    <h1>Technology</h1><br>
        <?php
            $query="select * from imagegallery where Category='Technology'";
            $result=mysql_query($query);
            while($datas=mysql_fetch_array($result)){
                $image= $datas['PictureName'];
                echo '<div style="float: left;">';
                echo "<a href='$image'><img class='img-thumbnail' src='$image'></a>";
                echo '</div>';
            }
        ?>
    </div>
    </div>

    <div class="row-fluid">
    <div class="col-lg-12 img-thumbnail head">
    <h1>Nature</h1><br>
        <?php
            $query="select * from imagegallery where Category='Nature'";
            $result=mysql_query($query);
            while($datas=mysql_fetch_array($result)){
                $image= $datas['PictureName'];
                echo '<div style="float: left;">';
                echo "<a href='$image'><img class='img-thumbnail' src='$image'></a>";
                echo '</div>';
            }
        ?>
    </div>
    </div>

    <div class="row-fluid">
    <div class="col-lg-12 img-thumbnail head">
        <h1>Wildlife</h1><br>
        <?php
            $query="select * from imagegallery where Category='Wildlife'";
            $result=mysql_query($query);
            while($datas=mysql_fetch_array($result)){
                $image= $datas['PictureName'];
                echo '<div style="float: left;">';
                echo "<a href='$image'><img class='img-thumbnail' src='$image'></a>";
                echo '</div>';
            }
        ?>
    </div>
    </div>

    <div class="row-fluid">
    <div class="col-lg-12 img-thumbnail head" style="margin-bottom: 20px;">
        <h1>Just Pics</h1><br>
        <?php
            $query="select * from imagegallery where Category='Just Pics'";
            $result=mysql_query($query);
            while($datas=mysql_fetch_array($result)){
                $image= $datas['PictureName'];
                echo '<div style="float: left;">';
                echo "<a href='$image'><img class='img-thumbnail' src='$image'></a>";
                echo '</div>';
            }
        ?>
    </div>
    </div>

    </div>
    <footer class="col-lg-12" style="color: black; padding-top: 5px;">
            <div class="row">
                <div align="center">
                    <div id="copyright">
                        <p>©2017, HomeLabs.<br>
                        <a href="#"> CCI </a> designed by Dota boys!
                        </p>
                    </div>
                
                
                    <h4> Follow Us </h4>
                    <div class="social-icons">
                        <a href="http://www.facebook.com" class="fa fa-facebook"></a>
                        <a href="http://www.twitter.com" class="fa fa-twitter"></a>
                        <a href="http://www.linkedin.com" class="fa fa-linkedin"></a>
                    </div>
                </div>
            </div>
    </footer>
</div>    
</body>