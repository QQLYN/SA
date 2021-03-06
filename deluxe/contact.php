<?php
session_start();
if(! isset($_SESSION["Mail"])){
  header("Location: Sign.php?");
}$mail=$_SESSION["Mail"];
$rolesign=$_SESSION["role"];
$pon=$_SESSION["Provider_or_not"];

//重上一個得到的值，這個帳號登入後就會存入。
//下面才會用到，判斷是不是攝影師
//$_SESSION[Provider_or_not] = 0;
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>ARTSA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>


        .img1{

            margin-left: 60px;

        }
        .pot{
            margin-left: 50px;

        }
        

    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">ARTSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="collection.html" class="nav-link">Collections</a></li>
                <li class="nav-item"><a href="transaction.php" class="nav-link">Transaction</a></li>
                <li class="nav-item"><a href="MemberCenter.html" class="nav-link">Account</a></li>
                <li class="nav-item active"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="log-out.php" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>Photographer Info</span></p>
                    <h1 class="mb-4 bread">Photographer Info</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<p></p>
    <div class="container">
        <div style="border-style: solid;border-width:1px;">
            <div><br>
                <div class="media">
                    <img src="images/people.jpeg" class="border border-secondary img1" alt="人頭像" style="width: 150px;height: 150px">
                    <div class="media-body pot">
                        
                     Andy Liu &nbsp;&nbsp;&nbsp;<a href="#">
                                <i class='fas fa-star'></i>&nbsp;
                                <i class='fas fa-star'></i>&nbsp;
                                <i class='fas fa-star'></i>&nbsp;
                                <i class='fas fa-star'></i>&nbsp;
                                <i class='far fa-star'></i></a>
                        
                          
                <button class="button button1" data-toggle="modal" data-target="#myModal" style="border: 0; background-color: none;"><i class="fa fa-exclamation-circle" style="font-size:17px;" ></i></button>
                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog model-dialog-centered modal-lg" role="document" style="width:500px">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
			</div>
			<div class="modal-body" >
                
				<table align=center>
            
             
             
         <tr>
              <td>檢舉原因</td>
<td><form>
        <select name="YourLocation">
            <option >請選擇</option>
            <option >內容不當</option>
            <option >詐欺行為</option>
            <option>裸露不當</option>
            <option >惡意洗版</option>
            <option >違法行為</option>
            <option>其他</option>
        </select>
</form></td>
             
          </tr>
                   
          
                    
          <tr>
              <td>檢舉事由</td>
              <td><textarea rows="7" style="width: 280px" required></textarea></td>
                    </tr>
                    
        
         
          
                </table>
                </div>
            
			<div class="modal-footer">
				
				<a href="consumer-evaluation.html"><button type="button" class="btn btn-primary">
					送出
                    </button></a>
            </div></div></div></div>
                              <br>
                              <br>
                        
                        
                        
                        
                       
                         
                        
                        <a href="#">Album</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<a href="#">star</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp; &nbsp;<a href="#">Evaluation</a><br><br>
                        &nbsp;&nbsp;1000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000<br><br>
                    
                </div>
            </div>
            <hr>
            <div class="container">
                
                <label>&nbsp;&nbsp;Resume</label>
                
                   <table class="table table-bordered" border="1">
　<tr>
　
　<td style="width: 50%">專長：婚禮人像、風光景色照、網美網帥型象照</td>
  <td rowspan="3">工作經驗：<br>2年  專業婚紗攝影 <br>2年 自然風光攝影<br>3年  外景節目攝影總領導 <br>3年  youtuber型象攝影總監 </td>
　</tr>
　<tr>
　<td>年資：10年</td>
　</tr>
  <tr>
    <td>地區：台北市</td>
  </tr>
            
   </table>
                
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">  
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" width="100%" height="225" src="images/model1.jpeg">
                            <div class="card-body">
                                <p class="card-text">model</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    
                                        
            <div class="col-sm-12 col-md ftco-animate">
            <a href="images/model1.jpeg" class="insta-img image-popup" style="background-image: url(images/model1.jpeg);">
              <div class="icon d-flex justify-content" style="margin-left:-20px">
                  
               <button type="button11" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
            </a>
          </div>
                                        
                                        
                                    
                                    <small class="text-muted">3 minutes ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" width="100%" height="225" src="images/sa5.jpg">
                            <div class="card-body">
                                <p class="card-text">foodie</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="col-sm-12 col-md ftco-animate">
            <a href="images/sa5.jpg" class="insta-img image-popup" style="background-image: url(images/sa5.jpg);">
              <div class="icon d-flex justify-content" style="margin-left:-20px">
                  
               <button type="button11" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
            </a>
          </div>
                                    <small class="text-muted">6 months ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top" width="100%" height="225" src="images/scene.jpg">
                            <div class="card-body">
                                <p class="card-text">scene</p>
                                <div class="d-flex justify-content-between align-items-center">
                                   <div class="col-sm-12 col-md ftco-animate">
            <a href="images/scene.jpg" class="insta-img image-popup" style="background-image: url(images/scene.jpg);">
              <div class="icon d-flex justify-content" style="margin-left:-20px">
                  
               <button type="button11" class="btn btn-sm btn-outline-secondary">View</button>
                  </div>
            </a>
          </div>
                                    <small class="text-muted">9 months ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>










<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>