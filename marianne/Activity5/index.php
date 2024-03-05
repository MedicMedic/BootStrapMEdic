<html>
   <head>
         <title>3-BSCS-1</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
    </head>

   <body>
      <h1>Activity 5</h1>

      <div class="container">

         <ul class="list-inline">
            <li>
               <a href="#" data-bs-toggle="popover" data-bs-placement="top" title="Top popover" data-bs-content = "wah">Top</a>
               <a href="#" data-bs-toggle="popover" data-bs-placement="bottom" title="Bottom popover" data-bs-content = "wah">Bottom</a>
               <a href="#" data-bs-toggle="popover" data-bs-placement="left" title="Left popover" data-bs-content = "wah">Left</a>
               <a href="#" data-bs-toggle="popover" data-bs-placement="right" title="Right popover" data-bs-content = "wah">Right</a>
            </li>
         </ul>

         <ul class="list-inline">
            <li>
               <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Top Tool Tip">Top</a>
               <a href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bottom Tool Tip">Bottom</a>
               <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Left Tool Tip">Left</a>
               <a href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="Right Tool Tip">Right</a>
            </li>
         </ul>
      </div>
      <script>
         $(document).ready(function(){
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
               return new bootstrap.Tooltip(tooltipTriggerEl)
            });
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
               return new bootstrap.Popover(popoverTriggerEl)
            });
         });
      </script>


      <hr/>
      <br/>

      <center>
         <div class="container" style = "width:300px;">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                  <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
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

                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
               </div>
            </div>
         </div>
      </center> 

         <hr/>
         <br/>

         <div class="container">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Open Modal Box</button>
            <div class="modal" id="myModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h4 class="modal-title">This is my modal header</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                     </div>
                     <div class="modal-body">
                        <p>This is modal content</p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
  
   </body>
</html>
