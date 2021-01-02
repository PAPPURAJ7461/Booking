<html>
   <head>
   <title>OSMS</title>
   <!--Bootstrap file-->
   <link rel="stylesheet" type="text/css" href="Css/bootstrap.min.css">
   <!--Font Awesome file-->
   <link rel="stylesheet" type="text/css" href="Css/all.min.css">
   <!-- Fontawesome icons-->
	<link rel="stylesheet" type="text/css" href="Css/all.css">
   <!--Custom Css file-->
   <link rel="stylesheet" type="text/css" href="Css/custom.css">
   </head>
  <body>
     <!-----------------Start Navbar--------------> 
     <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
     <a href="index.php" class="navbar-brand">TOLET</a>
     <span class="navbar-text">Customer's Happiness is our Aim</span>
     <button type="button" class="navbar-toggler"
     data-toggle="collapse"data-target="#myMenu">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item" ><a class="nav-link" href="index.php"
        ><i class="fas fa-home"></i>&nbsp;Home</a></li>
         <li class="nav-item" ><a class="nav-link" href="#services"
        ><i class="fas fa-tools"></i>&nbsp;Services</a></li>
        <li class="nav-item" ><a class="nav-link" href="#registration"
        >Registration</a></li>
        <li class="nav-item" ><a class="nav-link" href="Requester/Requester_login.php"
        ><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a></li>
        <li class="nav-item" ><a class="nav-link" href="#contact"
        ><i class="fas fa-address-book"></i>&nbsp;Contact</a></li>
       
      </ul>
    </div>
     </nav>
     <!----------------- End  Navbar-------------->  
     <!----------------- Start Jumbotron-------------->
     <header class="jumbotron back-image" style="background-image:url('Images/banar1.jfif')">
     <div class="myheading my-head">
     <h1 class="text-uppercase text-success font-weight-bold"
     >welcome to for booking</h1>
     <p class="font-italic">Customer Happiness is our Aim</p>
     <a href="Requester/Requester_login.php"" class="btn btn-success mr-4">Login</a>
     <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
     <div>
    </header>
     
     <!----------------- End   Jumbotron-------------->
     <!----------------- Start  section container-------------->
     <div class="container">
         <div class="jumbotron">
             <h3 class="text-center">TOLET SERVICES</h3>
             <p>
             Socialbnb is a unique opportunity to explore more than usual during your trip. It is a win-win situation: on the one hand you as a traveler can get insights to some social projects you would most likely have never heard of before and you can support them in the same time with your stay. And on the other hand, it is a really good chance for these social projects to become more well-known and to get an additional source of income to secure their activities. My first stay was with a social foundation called YAWE in Uganda and I was overwhelmed by the warmly welcome and the overall experience.
             </p>
         </div>
     </div>
     <!----------------- End  section container-------------->
      <!----------------- Start service section -------------->
      <div class="container text-center border-bottom " id="services">
      <h2>Our Services</h2>
      <div class="row mt-4">
          <div class="col-sm-4 mb-4">
           <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>   
           <h4 class="mt-4">Electronic Appliances</h4>
          </div>
          <div class="col-sm-4 mb-4">
           <a href="#"><i class="fas fa-sliders-h fa-8x"></i></a>   
           <h4 class="mt-4">Priventive Maintenance</h4>
          </div>
          <div class="col-sm-4 mb-4">
           <a href="#"><i class="fas fa-cogs fa-8x text-primary"></i></a>   
           <h4 class="mt-4">Fault Repair</h4>
          </div>
      </div>
    </div>
      <!----------------- end   service section -------------->
       <!----------------- Start   Form section -------------->
        <?php include('UserRegistration.php')?>
       <!----------------- end   Form  section -------------->
       <!----------------- Start Happy customer -------------->
       <div class="jumbotron bg-danger">
          <div class="container">
             <h2 class="text-center text-white mb-4">Happy Customers</h2>
             <div class="row ">
                <div class="col-lg-3 col-sm-6"><!--Start 1st column-->
                 <div class=" card shadow-lg mb-2">
                    <div class="card-body text-center">
                     <img src="Images/avatar1.jpg" alt="avatar" class="img-fluid" style="border-radius:100px">
                     <h4 class="card-title">Pappu Kumar</h4>
                     <p>hello how are you</p>
                    </div>
                 </div>
                </div><!--End 1st column-->
                <div class="col-lg-3 col-sm-6"><!--Start 2nd column-->
                 <div class=" card shadow-lg mb-2">
                    <div class="card-body text-center">
                     <img src="Images/avatar1.jpg" alt="avatar" class="img-fluid" style="border-radius:100px">
                     <h4 class="card-title">Pappu Kumar</h4>
                     <p>hello how are you</p>
                    </div>
                 </div>
                </div><!--End 2nd column-->
                <div class="col-lg-3 col-sm-6"><!--Start 3rd column-->
                 <div class=" card shadow-lg mb-2">
                    <div class="card-body text-center">
                     <img src="Images/avatar1.jpg" alt="avatar" class="img-fluid" style="border-radius:100px">
                     <h4 class="card-title">Pappu Kumar</h4>
                     <p>hello how are you</p>
                    </div>
                 </div>
                </div><!--End 3rd column-->
                <div class="col-lg-3 col-sm-6"><!--Start 4th column-->
                 <div class=" card shadow-lg mb-2">
                    <div class="card-body text-center">
                     <img src="Images/avatar1.jpg" alt="avatar" class="img-fluid" style="border-radius:100px">
                     <h4 class="card-title">Pappu Kumar</h4>
                     <p>hello how are you</p>
                    </div>
                 </div>
                </div><!--End 4th column-->
             </div>
          </div>
       </div>
       <!----------------- end   Happy  customer-------------->
       <!----------------- Start Contact Us-------------->
       <div class="container" id="contact">
          <h2 class="text-center mb-4">Contact US</h2>
          <div class="row">
          <!-------Start 1st column--------> 
          <?php include('ContactForm.php')?>
         <!-------End 1st column--------> 
            <div class="col-md-4">
               <strong>HeadQuater:</strong><br>
               XYZ Pvt. Ltd<br>
               Ballabgarh ,Faridabad<br>
               Hariyana -1200101<br>
               Phone:+91 7461031592<br>
               <a href="#" target="_blank">www.tolet.com</a> <br> <br>
               <strong>Branch:</strong><br>
               XYZ Pvt. Ltd<br>
               Rajendra Place ,Delhi<br>
               Delhi -1100101<br>
               Phone:+91 7461031592<br>
               <a href="#" target="_blank">www.tolet.com</a> <br> <br> 
            </div>
          </div>
       </div>
       <!----------------- end   Contact Us-------------->
       <!-------------Start footer------------>
       <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
        <div class="row py-3">
           <div class="col-md-6"><!------Strat 1st coloumn------>
              <span class="pr-3">Follow Us:</span>
              <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
		        <a href="#"target="_blank"class="pr-2 fi-color"><i class="fab fa-instagram"></i></a>
		        <a href="#"target="_blank"class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
		        <a href="#"target="_blank"class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
           </div><!------end 1st coloumn------>
           <div class="col-md-6 text-right"><!------Strat 2nd coloumn------>
              <small>Designed by P.k Raj &copy; 2020</small>
              <a href="Admin/Adminlogin.php" class="ml-2">Admin Login</a>
           </div><!------end 2nd coloumn------>
        </div>
        </div>
       </footer>
      <!-------------end footer------------>
 <!---------JavaScript File------------>
 <script src="Js/jquery3.4.1.main.js"></script>
 <script src="Js/popper.js"></script>
 <script src="Js/bootstrap.min.js"></script>
 <script src="Js/all.min.js"></script>
  </body>
</html>