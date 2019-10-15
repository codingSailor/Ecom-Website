 <!DOCTYPE html>
<html>
   <head>

      <title>King's Dairy Milk</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" type="text/css" href="css/style.css">
         <link rel="stylesheet" type="text/css" href="css/feedback.css">
         <link rel="stylesheet" type="text/css" href="css/login.css">
         <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <link href="css/animate.css" rel="stylesheet">
         <link href="css/main.css" rel="stylesheet">
         <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
         <link href="css/responsive.css" rel="stylesheet">

   </head>
    <body>
      <div id="container">
         <div id="header"></div>
         <div id="body"></div>
         <div id="footer"></div>
      </div>
      <style>
      body {
         background-image: url("img/kings.jpg");
           }
      </style>
      <header>
          <div class= "wrapper">
             <img src="img/kingsdairy1.jpg" alt="Kingsdairymilk logo" width="120" height="100">
             <div class= "hov">
             <nav>
              <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="Menu.php">MENU</a></li>
                <li><a href="AboutUs.php">ABOUT US</a></li>
                <li><a href="Feedback.php">FEEDBACK</a></li>
                <li><a href="cart.php">CART</a></li> 
              </ul>            
             </nav>
             </div>
          </div>
      </header>
      <section>
      
      <div class="wrapper">
      <div class="carouselbox">

          <form>
             <div id="form-main">
               <div id="form-div">
                <form class="form" id="form1">
                <form action="form.php" method="GET">
                  <p class="name">
                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                  </p>
      
                  <p class="email">
                  <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                  </p>
      
                  <p class="text">
                   <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment" /></textarea>
                  </p>
                  <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                  </div>
                </form>
                </form>
            </div>
          </form>

          </div>    
          </div>
      </section>
      <footer>
        <div class= "wrapper">
         <nav>
           <ul>
            <div class="social-btns"><a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a><a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a><a class="btn google" href="#"><i class="fa fa-google"></i></a><a class="btn dribbble" href="#"><i class="fa fa-dribbble"></i></a><a class="btn skype" href="#"><i class="fa fa-skype"></i></a>
              </div>
             <li><a href="index.html">HOME</a></li>
             <li><a href="Menu.php">MENU</a></li>
             <li><a href="AboutUs.php">ABOUT US</a></li>
             <li><a href="Feedback.php">FEEDBACK</a></li>
             <li><a href="cart.php">CART</a></li> 
           </ul>            
         </nav>

         <div class="index-add">
             <p>
               <strong>King's Dairy Milk.&reg;</strong><br>
               92/98, Ghodapdeo Mandir,<br>                
               Barrister painath road,<br>
               Reay road west, Mumbai- 400033.<br>
             </p>

             <p>
               <strong>Contact Us</strong><br>
               <abbr title="Phone">Tel Office:</abbr> (022)23729174 <br>
               <a href="mailto:#">first.last@example.com</a>
             </p>
        </div>   
        </div>  

      </footer>


      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>         
      <script src="js/main.js"></script>
    </body>
</html> 