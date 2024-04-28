<!DOCTYPE html>
<html>
   <head>
         <title>3-BSCS-1</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script>
            $(document).ready(function () 
            {
               $('body').scrollspy({ target: '.navbar', offset: 50 });
            });
         </script>
         <style>
            section
            {
               height: 70vw;
               padding-top: 50px;
            }
            h1
            {
               padding: 0;
               margin: 0;
            }
         </style>
    </head>

   <body data-bs-spy = "scroll" data-bs-target = ".navbar">
      <nav class = "navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-flex justify-content-between">
         <span class = "text-light">The Duck Pics</span>
         <ul class = "navbar-nav">
            <li class="nav-item"><a class = "nav-link" href = "#home">Home</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#duck_gallery">Duck Gallery</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#people_gallery">People Gallery</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#plant_gallery">Plant Gallery</a></li>
         </ul>
      </nav>

      <section id = "home" style = "background: #fee1f4; text-align:center;" alignment = "center">
         <div class="container" style = "width:300px;">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="pic/marianne.png" width="200" height="200">
                     <div class = "carousel-caption">
                        <h3>Marianne</h3>
                        <p>I am Marianne</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="pic/cedric.png" width="200" height="200">
                     <div class = "carousel-caption">
                        <h3>Cedric</h3>
                        <p>My brother</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="pic/gaspar.png" width="200" height="200">
                     <div class = "carousel-caption">
                        <h3>Gaspar</h3>
                        <p>My cousin</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="pic/gaspar.png" width="200" height="200">
                     <div class = "carousel-caption">
                        <h3>Gaspar</h3>
                        <p>My cousin</p>
                     </div>
                  </div>

                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
               </div>
            </div>
         </div>
      </section>

      <section id = "about" style = "background: #c4caf4">
         <div class = "container">   
            <h1>About Me</h1>
            <p>
               My name is Marianne Edic. I'm a 3rd year Computer Science Student in the New Era University. My talents are artistic.
               I have no idea why I'm here either.
            </p>
            <h3>Things I draw</h3>
            <div class = "d-flex justify-content-between">
               <img src="pic/rose.png" class= "img-thumbnail" width="200" height="200">
               <img src="pic/bim bam toi thumbnail.png" class= "img-thumbnail" width="200" height="200">
               <img src="pic/crystal susie happy.png" class= "img-thumbnail" width="200" height="200">
               <img src="pic/duck.png" class= "img-thumbnail" width="200" height="200">
            </div>
            <p>I make cool stuff, but these are not what you're interested in. Let me show you my coding projects.</p>
         </div>
      </section>
      <section id = "product" style = "background: #eba1e5;">
         <div class = "container">
            <h1>Cool Stuff I Make</h1>
            <p> My Coding Projects</p>
            <div class="container d-flex justify-content-center" style = "height:300px; width:1000px;">
               <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                     <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                     <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <a href = "https://github.com/MedicMedic/The-Super-Stellar-Compiler/releases/tag/v1.0.0">
                        <img src="pic/TSSC.png"  class= "img-thumbnail" height="300">
                        </a>
                        <div class = "carousel-caption text-dark">
                           <h3>The Super Stellar Compiler</h3>
                           <p>Final project for Theory of Programming Languages.</p>
                           <p>I made this as a backup for when working with my project partner was no longer feasible.</p>
                           <p>He is quite slow, but pretty smart.</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <a href = "https://vemaiensi.github.io/Basic-Java-Sintax-Checker/">
                           <img src="pic/TurtleDuck.png"  class= "img-thumbnail" height="500">
                        </a>
                        <div class = "carousel-caption text-warning">
                           <h3>The TurtleDuck Java Syntax Checker</h3>
                           <p>Final project for Theory of Programming Languages.</p>
                           <p>I coded the functions of the buttons while he slaved away on the design.</p>
                           <p>He is really slow, but pretty smart.</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <a href = "https://medicmedic.github.io/TaskRNG/">
                           <img src="pic/TaskRNG.png"  class= "img-thumbnail" height="400">
                        </a>
                        <div class = "carousel-caption text-dark">
                           <h3>Task RNG</h3>
                           <p>Personal Project That I Use Daily.</p>
                           <p>As you can see, it forced me to work on this page.</p>
                           <p>Curse you, random generation deities!</p>
                        </div>
                     </div>

                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id = "contact" style = "background: #f7f7b3; height: 1000px;">
         <div class = "container">
            <h1>Contact Information</h1>
            <h3>HIRE ME!</h3>
            <div itemscope itemtype='http://schema.org/Person' class='fiverr-seller-widget' style='display: inline-block;'>
               <a itemprop='url' href=https://www.fiverr.com/stellarsong rel="nofollow" target="_blank" style='display: inline-block;'>
                  <div class='fiverr-seller-content' id='fiverr-seller-widget-content-2206442a-ce5a-4b61-b3ce-f368fa5c7c55' itemprop='contentURL' style='display: none;'></div>
                  <div id='fiverr-widget-seller-data' style='display: none;'>
                        <div itemprop='name' >StellarSong</div>
                        <div itemscope itemtype='http://schema.org/Organization'><span itemprop='name'>Fiverr</span></div>
                        <div itemprop='jobtitle'>Seller</div>
                        <div itemprop='description'>I am Stellar, a writer, singer, composer, producer, and occasionally an artist. I have written short stories, poems, and speeches for various people. If you want to request my services, feel free and I'll do it immediately and to the best of my ability. </div>
                  </div>
               </a>
            </div>
            <script id='fiverr-seller-widget-script-2206442a-ce5a-4b61-b3ce-f368fa5c7c55' src='https://widgets.fiverr.com/api/v1/seller/stellarsong?widget_id=2206442a-ce5a-4b61-b3ce-f368fa5c7c55' data-config='{"category_name":"Writing \u0026 Translation"}' async='true' defer='true'></script>
            
            <div class="page-header">
               <h3>Fill This In And I Might Email You</h3>
            </div>
            <form action="YOUR_SERVER_URL" method="post">
               <div class="mb-3">
                  <label for="name" class="form-label">Enter your name</label>
                  <input type="text" class="form-control" id="name" name="name">
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Enter your email</label>
                  <input type="email" class="form-control" id="email" name="email">
               </div>
               <div class="mb-3">
                  <label for="motherMiddleName" class="form-label">Enter your mother's middle name</label>
                  <input type="text" class="form-control" id="motherMiddleName" name="motherMiddleName">
               </div>
               <div class="mb-3">
                  <label for="interestingText" class="form-label">Interesting Text To Get Me To Reply</label>
                  <input type="text" class="form-control form-control-lg" id="interestingText" name="interestingText" style="padding: 20px; line-height: 50px;">
               </div>
               <div class="mb-3">
                  <button type="submit" class="btn btn-success w-100">Click to Submit</button>
               </div>
            </form>
      </section>
   </body>
</html>
