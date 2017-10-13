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
<script>
$(function(){
/*whitepapers Pagination*/
var paginate = $.fn.paginate({//options here
        perPage  : 2,//list items per page
        pageId    : "paginationList", //pagination ul Id
        pager      : "pager",//pager Id
        leftImgSrc  : "img/pager-left.png",
        rightImgSrc  : "img/pager-right.png",
        leftImgActiveSrc : "img/pager-left-active.png",
        rightImgActiveSrc : "img/pager-right-active.png",
        getCurrentPage : function(currentPage){
            $(".pageNo").html("Page "+currentPage);
        }
});

});  
</script>
<style>
.pager {
    float: right;
    background:#ecf0f4;
    height: 30px;
    width: 108px;
    position: relative;
    right: 0px;
    width: 118px;}
.pager img {
    margin: 3px;
    }
.pageNo{
    display:inline;
    position: relative;
    }


.sidewala{
    background-color: #f1f1f1;
}

.item img{
    margin-top:5px;
    width: 100%;
}
.verticalnav{
    border-bottom: 2px thin;
    box-shadow: 0 2px 0 lightgray; 
}
.verticalnav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding-top: 10px;
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
.tm-block{
    margin: 0px;
    height: 150px;
}
.tm-block img{
    width: 100%;
    margin: 0px;
}
.myCarousel{
            width: 100%;
            height: 100%;
        }
        .slideimage{
            height: 150px !important;
        }
.blogwell{
    overflow: hidden;
    max-height: 450px;
    padding-top: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
}
.title{
    height: 50px;
}
.fig{
    width: 100%;
    height: 200px;
}
.fig img{
    height: 100%;
    width: 100%;
}
.bakiko{
    padding: 10px;
    height: 150px;
    margin-bottom: 5px;
}
.para{
    height: 100px;
    overflow: hidden;
}
.pull-right{
    margin-top: 15px;
    height: 50px;   
}
.pull-left{
    margin-top: 15px;
    height: 50px;   
}
</style>
</head>

<body class="templatemo-container">
<div style="width: 100%;">
        <!-- header -->
        <div class="row">
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
                                <li><a href="imagegallery.php">My Photography</a></li>
                                <li><a href="blog.php" class="active">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end header -->
        <div class="container-fluid" style="margin-top: 20px;">
            <div class="row-fluid">
                <div class="col-lg-4 sidewala" style="float: left; margin-top: 90px;height: 100%;">
                    <div class="verticalnav">
                        <ul>
                            <li><a href="myblog.php">My Blogs</a></li>
                            <li><a href="login.php">Settings</a></li>
                        </ul>
                    </div>
                    <div class="verticalnav" style="padding-bottom: 5px;">
                        <div align="center" style="margin: 10px; color:red;">
                            <span align="left"><h4><strong> About Me </strong></h4></span>
                            <img src="img/download.jpg" class="img-circle" align="center" width="200px"> 
                        </div>
                        <p>Hello! asdf ere t g bfgb kfbfb fbkdfg dfg dfg  r tr  v  s fdg  ger  er h  h gh yt j t </p>
                    </div>
                    <div class="verticalnav" style="margin-top:10px; margin-bottom: 10px;">
                            <div style="width: 100%;">
                                <div class="tm-blocks-container effect1">
                                    <div class="tm-block green-bg">
                                        <a href="imagegallery.php" class="tm-block-link">Technology</a>
                                    </div>
                                    <div class="tm-block">
                                        <?php
                                            $ImageArray = array();
                                            $queryImages = "select PictureName from imagegallery where Category='Technology'";
                                            $result = mysql_query($queryImages);
                                            if(mysql_num_rows($result) >0){
                                                while ($row = mysql_fetch_array($result)){
                                                    $ImageArray[] = $row['PictureName'];
                                                }
                                            }

                                        ?>
                                    <div id="myCarousel"  class="myCarousel carousel slideCarousel" data-ride="carousel" data-interval="5000" >
                                        
                                        <div class="carousel-inner" role="listbox">
                                        <?php
                                            for($j=0;$j<count($ImageArray);$j++){
                                                 //If it is the first image set it as active
                                                    if($j==0){
                                                        echo "<div class='item active'>
                                                                <img class='slideimage' src='$ImageArray[$j]''>
                                                            </div>";
                                                    }

                                                    else{
                                                        echo "<div class='item'>
                                                              <img class='slideimage' src='$ImageArray[$j]''> 
                                                            </div>";
                                                    }
                                     
                                            }
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            
                            <div class="tm-block">
                                        <?php
                                            $ImageArray = array();
                                            $queryImages = "select PictureName from imagegallery where Category='Nature'";
                                            $result = mysql_query($queryImages);
                                            if(mysql_num_rows($result) >0){
                                                while ($row = mysql_fetch_array($result)){
                                                    $ImageArray[] = $row['PictureName'];
                                                }
                                            }

                                        ?>
                                    <div id="myCarousel"  class="myCarousel carousel slideCarousel" data-ride="carousel" data-interval="4500" >
                                        
                                        <div class="carousel-inner" role="listbox">
                                        <?php
                                            for($l=0;$l<count($ImageArray);$l++){
                                                 //If it is the first image set it as active
                                                    if($l==0){
                                                        echo "<div class='item active'>
                                                                <img class='slideimage' src='$ImageArray[$l]''>
                                                            </div>";
                                                    }

                                                    else{
                                                        echo "<div class='item'>
                                                              <img class='slideimage' src='$ImageArray[$l]''> 
                                                            </div>";
                                                    }
                                     
                                            }
                                        ?>
                                        </div>
                                    </div>
                            </div>
                            <div class="tm-block red-bg">
                                <a href="imagegallery.php" class="tm-block-link">Nature</a>
                            </div>
                            <div class="tm-block yellow-bg">
                                <a href="imagegallery.php" class="tm-block-link">Wildlife</a>
                            </div>
                            <div class="tm-block">
                                        <?php
                                            $ImageArray = array();
                                            $queryImages = "select PictureName from imagegallery where Category='Wildlife'";
                                            $result = mysql_query($queryImages);
                                            if(mysql_num_rows($result) >0){
                                                while ($row = mysql_fetch_array($result)){
                                                    $ImageArray[] = $row['PictureName'];
                                                }
                                            }

                                        ?>
                                    <div id="myCarousel"  class="myCarousel carousel slideCarousel" data-ride="carousel" data-interval="4000" >
                                        
                                        <div class="carousel-inner" role="listbox">
                                        <?php
                                            for($k=0;$k<count($ImageArray);$k++){
                                                 //If it is the first image set it as active
                                                    if($k==0){
                                                        echo "<div class='item active'>
                                                                <img class='slideimage' src='$ImageArray[$k]''>
                                                            </div>";
                                                    }

                                                    else{
                                                        echo "<div class='item'>
                                                              <img class='slideimage' src='$ImageArray[$k]''> 
                                                            </div>";
                                                    }
                                     
                                            }
                                        ?>
                                        </div>
                                    </div>
                            </div>
                            <div class="tm-block">
                                        <?php
                                            $ImageArray = array();
                                            $queryImages = "select PictureName from imagegallery where Category='Just Pics'";
                                            $result = mysql_query($queryImages);
                                            if(mysql_num_rows($result) >0){
                                                while ($row = mysql_fetch_array($result)){
                                                    $ImageArray[] = $row['PictureName'];
                                                }
                                            }

                                        ?>
                                    <div id="myCarousel"  class="myCarousel carousel slideCarousel" data-ride="carousel" data-interval="5500" >
                                        
                                        <div class="carousel-inner" role="listbox">
                                        <?php
                                            for($m=0;$m<count($ImageArray);$m++){
                                                 //If it is the first image set it as active
                                                    if($m==0){
                                                        echo "<div class='item active'>
                                                                <img class='slideimage' src='$ImageArray[$m]''>
                                                            </div>";
                                                    }

                                                    else{
                                                        echo "<div class='item'>
                                                              <img class='slideimage' src='$ImageArray[$m]''> 
                                                            </div>";
                                                    }
                                     
                                            }
                                        ?>
                                        </div>
                                    </div>
                            </div>
                            <div class="tm-block blue-bg">
                                <a href="imagegallery.php" class="tm-block-link">Just Pics</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class = "col-lg-8" style="margin-top: 90px;">
                <h3><strong>My Recent Posts</strong></h3>
                <div class="bod">
                    <ul id="paginationList" style="list-style-type: none;">
                                    <?php
                                        $query="select * from blogtable order by ID desc";
                                        $result=mysql_query($query);
                                        while($datas=mysql_fetch_array($result)){
                                            
                                            $id=$datas['ID'];
                                            echo '<li>'.'<div class="blogwell">';
                                                echo '<div class="title">'.'<h2>'.'<span>'.'<strong>'.$datas['BlogTitle'].'</strong>'.'</span>'.'</h2>'.'</div>';
                                                echo '<div class="fig">';
                                                    
                                                    $sqlimage  = "SELECT ImageName FROM blogtable where ID=$id";
                                                        $imageresult1 = mysql_query($sqlimage);

                                                            while($rows=mysql_fetch_assoc($imageresult1))   
                                                                {
                                                                    $image = $rows['ImageName'];
                                                                    echo "<img src='$image' >";
                                                                    echo "<br>";
                                                                } 
                                                    
                                                echo '</div>';

                                                echo '<div class="bakiko">'; 
                                                                                    
                                                    echo '<div class="para">'.$datas['Content'].'</div>';

                                                    echo '<div class="pull-left">'.$datas['Date'].'</div>';
                                            
                                                    echo '<div class="pull-right">';
                                                        echo '<span class="glyphicon glyphicon-comment"></span>';
                                                                $querycomment="select count(commenttable.Comment) as num
                                                                    FROM blogtable
                                                                    join commenttable
                                                                    on blogtable.ID=commenttable.ID 
                                                                    where blogtable.ID='$id' 
                                                                    group by blogtable.BlogTitle";
                                                                $resultcomment=mysql_query($querycomment);
                                                                $datascomment=mysql_fetch_array($resultcomment);
                                                                if ($datascomment['num']=="") {
                                                                     $datascomment['num']=0;
                                                                    }                              
                                                    echo $datascomment['num'];
                                                        echo "<a href='comment.php?id=$id'> View all</a>";
                                                    echo '</div>';

                                                echo '</div>';
                                            
                                            echo '</div>';
                                            echo '</li>';
                                            }
                                    ?>

                    </ul>
                </div>
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
</html>
