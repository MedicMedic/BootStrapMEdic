<!DOCTYPE html>
<html>
   <head>
         <title>3-BSCS-1</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script>
            $(document).ready(function () {
               $('body').scrollspy({ target: '.navbar', offset: 50 });
            });
         </script>
         <style>
            section
            {
               width: 100vw;
               height: 100vw;
               padding-top: 50px;
            }
            h1
            {
               padding: 0;
               margin: 0;
            }
         </style>
    </head>

   <body data-spy = "scroll" data-target = ".navbar">
      <h1>Activity 6</h1>

      <nav class = "navbar navbar-expand-lg navbar-dark bg-dark-subtle fixed-top">
         <ul class = "navbar-nav">
            <li class="nav-item"><a class = "nav-link" href = "#home">Home</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#about">About Us</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#product">Products</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#contact">Contact Us</a></li>
         </ul>
      </nav>

      <nav class = "navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
         <ul class = "navbar-nav">
            <li class="nav-item"><a class = "nav-link" href = "#home">Home</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#about">About Us</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#product">Products</a></li>
            <li class="nav-item"><a class = "nav-link" href = "#contact">Contact Us</a></li>
         </ul>
      </nav>

      <section id = "home" style = "background: green;">
         <h1>Home</h1>
      </section>
      <section id = "about" style = "background: red;">
         <h1>About Us</h1>
      </section>
      <section id = "product" style = "background: blue;">
         <h1>Products</h1>
      </section>
      <section id = "contact" style = "background: black;">
         <h1>Contact Us</h1>
      </section>
   </body>
</html>
