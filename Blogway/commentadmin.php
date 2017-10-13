<?php 
include 'connection.php';

?>
<!--$countquery="select * from blogtable join commenttable on blogtable.ID=commenttable.ID where ID='$id'"; 
$resultcount=mysql_query($countquery);
$countdatas=mysql_fetch_array($resultcount);
$count=$countdatas['CommentCount'];-->

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
<style type="text/css">
#wrap{
border: 2px solid lightgray;
alignment-adjust: central;
width: 800px;
margin-left: 50px;
margin-top: 10px;
box-shadow: 0 5px 0 #e6e6e6;
padding-bottom: 20px;

}
#leaveacomment{
    margin-left: 50px;
}
h1{
color: blue-violet;
text-align: center;
}

h3.heading{
margin-left: 5px;
font-size: 25px;
float: left;
position: relative;
width: 405px;
height: 40px;
padding-top: 5px;

}

p{
margin-left: 5px;
padding: 8px;
padding-left: 20px;
}
.userimg img{
    height: 40px;
    width: 40px;
    margin: 5px;
}
#name{
margin-left: 20px;
margin-bottom: 20px;
box-shadow: 0 2px 0 #e6e6e6;
height: 40px;
padding-left: 10px;
width: 500px;
}
#email{
margin-left: 20px;
margin-bottom: 20px;
box-shadow: 0 2px 0 #e6e6e6;
height: 40px;
padding-left: 10px;
width: 500px;
}
#comment{
margin-left: 20px;
margin-bottom: 20px;
box-shadow: 0 2px 0 #e6e6e6;
height: 40px;
padding-left: 10px;
width: 650px;
height: 200px;
}
#commentSubmit{
margin-left: 20px;
width: 250px;
height: 55px;
color: white;
font-size: 20px;
background-color: #2c95dc;
box-shadow: 0 3px 0 #09466f;
padding-left: 20px;
border-radius: 5px;
}
#commentSubmit:hover {
background-color: #09466f;

}

p{
font-size: 18px;
color: gray;
padding-bottom: 15px;
padding-top: 15px;
}
p1{
font-size: 18px;
padding-top: 20px;
}

#middle{
border: 1px solid lightgray;
width: 1000px;
height: 200px;
background-color: lightyellow;
margin-left: 45px;
text-align: left;
margin-top: 10px;
box-shadow: 0 2px 0 lightgray;
}
.blog{
   border: 3px solid #e3e3e3;
   box-shadow: 0 2px 0 lightgray; 
   border-bottom: none;
}
.blogwell{
    max-width: 90%;
    overflow: hidden;
    min-height: 20px;
    padding-top: 5px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 5px;
    margin-bottom: 5px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    font-size: 13px;
}
.well{
    margin-top: 5px;
    padding-top: 0px;
}
.pull-right{
    margin:0px;
    padding: 0px;
    font-size: 13px;
}
.fig img{
    width: 100%;
    height: 300px;
}
</style>
</head>

<body style="background-color: #999999;">
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
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="imagegalleryuploadadmin.php">My Photography</a></li>
                                <li><a href="blog.php"">Blog</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $id=$_GET['id'];
            if(isset($_POST['dsubmit']))
        {
            $dnametl = $_POST['dname'];
            $demailtl = $_POST['demail'];
            $commenttl = $_POST['comment'];
            //<!--count=count+1-->
            $query="insert into commenttable(Name,Email,Comment,ID) values('$dnametl','$demailtl','$commenttl','$id')";
            $result=mysql_query($query);
        }  
        ?>
    
    <div class="container" style="background-color: white; margin-top: 60px;">
        <div>
            <div class="span2"></div>
        </div>

        <div class="span8">
            <section class = "templatemo-container section-shadow-bottom">
            <div class="blog">
                <div class="blog-item well" style="margin-top: -20px;">
                    <h1 align="center">
                    <?php
                        $queryc="select * from blogtable WHERE ID='$id'";
                        $resulta=mysql_query($queryc);
                        $datas=mysql_fetch_array($resulta);
                        echo '<strong>'.$datas['BlogTitle'].'</strong>';
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
                    ?>
                    </h1>
                    <?php
                        echo '<br/>';
                        echo '<div style="overflow:auto;">'.$datas['Content'].'</div>';
                    ?>
                </div>
                <div class="pull-right">
                     <?php
                        echo "<a href='addvideo.php?id=$id'>Add Video | </a>"; 
                        echo "<a href='delete.php?id=$id'>Delete entire blog?</a>";
                    ?>
                </div>
            </div>
            </section>
            
            <div style="margin-bottom: 20px;">
                    <div class="container">
                        <div id="leaveacomment">  
                            <h3>Comments and Responses</h3>
                            <div>
                                <?php
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
                                    echo $datascomment['num'].' Comments';
                                ?>
                            </div>
                            <div class="comments">
                                        <?php
                                            $query="select * from blogtable
                                                    JOIN commenttable
                                                    ON blogtable.ID=commenttable.ID where blogtable.ID='$id'";
                                            $result=mysql_query($query);
                                            
                                            while($datas=mysql_fetch_array($result)){
                                                //echo $datas['CommentCount'].' Comments'.'<br>';
                                                $idd=$datas['IDid'];
                                                echo '<ul style="list-style-type: none;">'.'<li> <div class="blogwell">';
                                                echo '<p class="pull-right">';
                                                echo "<a name='delete' href='deletecomment.php?idd=$idd && id=$id'>Delete?</a>";
                                                echo '</p>';
                                                 echo '<div class="userimg">
                                                        <img src=img/user.png>';
                                                echo '<strong>'.$datas['Name'].' says'.'</strong>'.'<br>';
                                                echo $datas['Comment'];
                                                echo '</div>';
                                                echo '</div>'.'</li>'.'</ul>';
                                            }
                                        ?>
                            </div>
                        </div>
                        <div id="wrap">
                            <div id="main">
                                <div class="col-lg-12">
                                    <h3 class="heading"><span style="font-weight: bold;"> Leave a comment.</span></h3>    
                                </div>
                                <br/>
                            </div>
                                <div class="row" style="margin-left: 20px; color: red; font-size: 12px;">
                                    Your email address will not be published. Required fields are marked *
                                    <br>
                                    <br>
                                </div>
                            
                        <div id='form'>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="" method="POST" id="commentform" class="form">
                                        <div id="comment-name" class="form-row">
                                            <input type = "text" placeholder = "Name (required)" name = "dname"  id = "name" class="form-control" required="required" >
                                        </div>
                                        <div id="comment-email" class="form-row">
                                            <input type = "email" placeholder = "Email (will not be published) (required)" name = "demail"  id = "email" class="form-control" required="required">
                                        </div>
                                        <div id="comment-message" class="form-row">
                                            <textarea name = "comment" placeholder = "Comment..." id = "comment" class="form-control" required="required"></textarea>
                                        </div>
                                        <input type="submit" name="dsubmit" id="commentSubmit" value="Submit Comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
</body>
</html>