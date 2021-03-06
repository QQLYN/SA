<?php
session_start();
if(! isset($_SESSION['Mail'])){
    header("Location:Sign.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>會員中心</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

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
    <link rel="stylesheet" href="css/membercenterstyle.css">
    <link rel="stylesheet" href="css/tabstyle.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script> 

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    var mail,role,Provider_or_not;
    $( document ).ready(function() {
        console.log( "document loaded" );
    $.ajax
        ({
            url:"http://localhost/SA/deluxe/GetUser.php",  
            type:"POST",
            data:{},
            dataType:"json",
            success:function(data)
            {
              console.log(data.Mail);
              console.log(data.role);
              console.log(data.Provider_or_not);
              mail = data.Mail;
              role = data.role;
              Provider_or_not = data.Provider_or_not;
              console.log("good");
              SetMail(mail,role,Provider_or_not);
            },
            error: function(xhr) { 
               console.log(xhr.responseText);
            } 

        })
        

    });
    function SetMail(Mail,role,Provider_or_not)
    {
	    console.log("Mail:" + mail);
	    document.getElementById("Mail").innerHTML = mail;NonOpen
	    if(Provider_or_not == 0)
	    {
	    	document.getElementById("IdentityBT").style.display = "none";
	    	document.getElementById("NonOpen").style.display = "none";
	    }
	    else
	    {
		    if(role == 1)
		    {
		      document.getElementById("IdentityBT").style.display = "inline";
		      document.getElementById("Identity").value = "CONSUMER";
		      document.getElementById("NonOpen").style.display = "none";
		    }
		    if(role == 2)
		    {
		      document.getElementById("IdentityBT").style.display = "inline";
		      document.getElementById("Identity").value = "PHOTOGRAPHER";
		      document.getElementById("NonOpen").style.display = "inline";
		    }
  		}
    }

  </script>

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
            <li class="nav-item "><a href="collection.php" class="nav-link">Collection</a></li>
            <li class="nav-item"><a href="transaction.php" class="nav-link">Transcation</a></li>
            <li class="nav-item active"><a href="MemberCenter.php" class="nav-link">Account</a></li>
           <li class="nav-item" id="logout"><a href='./PHP.log-out.php' class='nav-link'>Logout</a></li>
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
              <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home</a></span> <span>About</span></p>
              <h1 class="mb-4 bread">MemberCenter</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <label style="display: none;" id = Mail></label>
        <div id="IdentityBT"><label>您現在的身分是<input type="submit" id="Identity" name="User_Identity" class="button button1" style="position: relative; left: 6%; margin-bottom: 20px;" onclick="switchVisible()" value="PHOTOGRAPHER"></label>
        
      </div>
          <div style="border-style: solid; border-width: 1px;">
            <div>
              <br>
              <div class="media">
                <img src="https://ppt.cc/fAwzZx@.jpg" class="border border-secondary img1" alt="人頭像" style="width: 150px;height: 150px; margin-left: 15px;">
                <div class="media-body form-group" style="margin-left: 50px; max-width: 33.333%;border-right-style: solid;">
                      
                    <ul>
                      <li><span>Andy Liu</span></li>
                      <li><span>ABC@gmail.com</span></li>
                      <li><span>1998/01/01</span></li>
                    
                      <div class="form-group">
                          <p><a class="btn-custom" href="EditProfile.html" target="_blank">修改個人資料</a></p>
                      </div>
                    </ul>
                </div>
                 <div class="media-body form-group" style="margin-left: 50px; max-width: 33.333%">
                    <ul>
                      <li><span>專案個數:</span> <span>6</span></li>
                      <li><span>我的簡歷:</span> <span class="form-group"><a href="#">編輯簡歷</a></span></li>
                      <li id = "NonOpen"><span>非公開身分:</span> <span><span>關閉 &nbsp;</span><label class="switch"><input type="checkbox"><span class="slider round"></span></label><span> &nbsp;開啟</span></span></li>
                      <div class="form-group">
                          <p><a class="btn-custom" href="PM.php">瀏覽全部專案</a></p>
                      </div> 
                    </ul>
                </div>
            </div>
             <br>
          </div>
      </div>
    
    </section>


    
    <!--<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Deluxe Hotel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
   Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
          </div>
        </div>
      </div>
    </footer>-->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script type="text/javascript" crossorigin="anonymous">
  function switchVisible(){
    var Value
    var role;
    var Mail = document.getElementById("Mail").innerHTML;
    var Identity = document.getElementById("Identity").value;
    //console.log(Identity);
    if(Identity == "PHOTOGRAPHER"){
      document.getElementById("Identity").innerHTML = "CONSUMER";
      Value = document.getElementById("Identity").value = "CONSUMER";
      role = 1;
    }
    else if (Identity == "CONSUMER"){
      document.getElementById("Identity").innerHTML = "PHOTOGRAPHER";
      Value = document.getElementById("Identity").value = "PHOTOGRAPHER";
      role = 2;
    }
    $.ajax
    ({
            url:"http://localhost/SA/deluxe/PHP/Identity.php",  
            type:"POST",
            data:{role,Mail},
            dataType:"json",
            success:function(data)
            {
            console.log(data.Identity);
              console.log("good");
            },
            error: function(xhr) { 
               console.log(xhr.responseText);
            }        
    })
  }
</script>

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