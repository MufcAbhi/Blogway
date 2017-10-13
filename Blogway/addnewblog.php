<?php include 'connection.php';
$f=date('F j, Y l');?>
<!DOCTYPE html>
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
.titleblog{
    border: dotted;
    border-color: black;  
    height: 100px;
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 5px 5px;            
}
.titleblog input{
    text-align: center;
    width: 100%; 
    height:100%; 
    border: none;
}
.container1 {
    display: inline;
    position: relative; 
    }
.container1 input { 
    margin: 10px 0px;
    width: 100%;
    border: dotted; 
    text-align: center;
    }
.container1 span {
    position: absolute;
    right: 5px;
    top: 4px;
    width: 20px;
    height: 10px;
    }
.container2 {
    display: inline;
    position: relative; 
    margin-top: 5px;   
    min-height: 1px;
    }
.write{
    min-width: 100%;
    min-height: 450px;
    padding: 0;
    resize: none;
}
.bot{
    margin-right: 10px;
}
</style>
</head>


<body class="templatemo-container">
        <?php 
        if(isset($_POST['submit']) == "submit")
        {
            $titletl = $_POST['title'];
            $writetl = $_POST['write'];
            $writetl= preg_replace("<br>","/n",$writetl);

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
            $query="insert into blogtable (BlogTitle,Content,ImageName,Date) values('$titletl','$writetl','$uploadname','$f')";
            $result=mysql_query($query);
            if(mysql_error()){
            echo mysql_error();
                }
        else{
            echo '<div style="margin-top: 90px; margin-bottom: -80px;" align="center" class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            Blog is <strong>successfully </strong> posted!
            </div>';
            move_uploaded_file($uploadtemp,"$uploadname");
            }
        }
        ?>
        <!-- header -->
        <div class="header-bg navbar-fixed-top" style="position: fixed; overflow: hidden;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 site-name-container">
                        <h1 class="site-name">Blogway</h1>
                    </div>
                    <div class="col-lg-9 templatemo-nav-container">
                        <nav class="templatemo-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">profile</a></li>
                                <li><a href="#">contact</a></li>
                                <li><a href="blog.php" class="active">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <div style="margin-left: 0px; float: left; width: 100%; margin-top: 90px;"">
            <div class="sidewala" style="float: left; width:15%; height: 100%;">
                <div class="verticalnav">
                    <ul>
                        <li><a href="myblogadmin.php">My Blogs</a></li>
                        <li><a href="addnewblog.php" class="active">Add new blogs</a></li>
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
        <form role="form" method="post" enctype="multipart/form-data" action="#">
            <div style="width: 85%; float: left; background-color: #f1f1f1;">
                <div class="col-lg-12">              
                    <div class="container1">
                        <h1><input type="text" name="title" placeholder="Enter Your Title" required="required" />
                            <span></span></h1>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="container2">
                        <textarea name="write" class="write" required="required"></textarea>
                    </div>
                </div>
                <div name="bot" class="bot" align="right">
                    
                                        <div class="form-group">
                                            <div class="col-lg-10">
                                                <div align="left"><label>Upload Image</label></div>
                                                <input class="form-control" type="file" name="upload" value="upload" required/>
                                            </div>
                                        </div>
                    
                        <div class="breadcrumbs">
                        <?php
                        print $f;
                        ?>
                        <div>
                            <button type="submit" name="submit" value="submit" class="btn btn-success">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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
</body>
</html>