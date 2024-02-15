<html>
   <head>
        <title>3-BSCS-1</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
        <script src = "js/bootstrap.bundle.min.js"></script>
        <script src = "js/jquery.js"></script>
    </head>

   <body>
      <h1>Activity 2</h1>

      <div class="container-fluid">
         <a href="#">Messages <span class="badge bg-dark">10</span></a><br/>
         <a href="#">Notifications <span class="badge bg-dark">30</span></a><br/>
         
         <button class="btn btn-primary">
            Click to see notifications 
            <span class="badge bg-dark">500</span>
         </button>

         <div class="p-3 mb-3">
            <h3>Downloads <span class="badge bg-dark">Version 10.1</span></h3>
         </div>
      </div>

      <hr/>
      <br/>

      <div class="container-fluid">
         <div class="alert alert-danger alert-dismissible fade show">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            Record already exists!
         </div>
         <div class="alert alert-success alert-dismissible fade show">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            Record already exists!
         </div>
         <div class="alert alert-warning alert-dismissible fade show">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            Record already exists!
         </div>
         <div class="alert alert-info alert-dismissible fade show">
            <button class="btn-close" data-bs-dismiss="alert"></button>
            Record already exists!
         </div>
      </div>

      <hr/>
      <br/>

      <div class="container-fluid">
         <div class="mt-4 p-5 bg-secondary-subtle text-black rounded">
            <h1>Heading with jumbotron</h1>
         </div>

         <h1>Heading without jumbotron</h1>

         <div class="p-3 mb-3">
            <h1>Welcome</h1>
         </div>

         <p class="border border-secondary bg-secondary-subtle rounded p-1">This is the well</p>
         <p class="border border-secondary bg-secondary-subtle rounded p-3">This is the well</p>
         <p class="border border-secondary bg-secondary-subtle rounded p-5">This is the well</p>
      </div>

      <hr/>
      <br/>

      <div class="container-fluid">
         <span><i class="bi bi-trash">: Trash Can</i></span><br/>
         <span><i class="bi bi-pencil">: Pencil</i></span><br/>
         <button class = "btn btn-success"><span class="bi bi-search"></span> Find</button>
      </div>

      <hr/>
      <br/>

      <div class="container-fluid">
         <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                  College
            </button>
            <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">CCS</a></li>
                  <li><a class="dropdown-item" href="#">CET</a></li>
                  <li><a class="dropdown-item" href="#">CBA</a></li>
                  <li class = "dropdown-divider"></li>
                  <li class = "dropdown-header">Exit</li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
         </div>

         <div class="dropend">
            <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                  College
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="#">CCS</a></li>
                  <li><a class="dropdown-item" href="#">CET</a></li>
                  <li><a class="dropdown-item" href="#">CBA</a></li>
                  <li class = "dropdown-divider"></li>
                  <li class = "dropdown-header">Exit</li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
         </div>

         <div class="btn-group dropup">
            <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                  College
            </button>
            <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">CCS</a></li>
                  <li><a class="dropdown-item" href="#">CET</a></li>
                  <li><a class="dropdown-item" href="#">CBA</a></li>
                  <li class = "dropdown-divider"></li>
                  <li class = "dropdown-header">Exit</li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
         </div>
      </div>


      <hr/>
      <br/>

      <div class="container-fluid">
         <button class="btn btn-default">Click me</button>
         <button class="btn btn-primary btn-sm">Click me</button>
         <button class="btn btn-info btn-lg">Click me</button>
         <button class="btn btn-success btn-md">Click me</button>
         <button class="btn btn-warning">Click me</button>
         <button class="btn btn-danger btn-sm">Click me</button>
         <button class="btn btn-link">Click me</button>
         <div class = "d-grid gap-2">
            <button class="btn btn-danger btn-block">Click me</button>
         </div>
         <button class="btn btn-danger disabled">Click me</button>
         <button class="btn btn-danger active">Click me</button>

         <div class="btn-group">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
         </div>

         <div class="btn-group-vertical">
            <button class="btn btn-info">Home</button>
            <button class="btn btn-info">About Us</button>
            <button class="btn btn-info">Contact Us</button>
            <button class="btn btn-info">Products</button>
         </div>

         <div class="d-flex flex-column flex-justify justify-content-between">
            <div class= "btn-group">
               <button class="btn btn-success">Home</button>
               <button class="btn btn-success">About Us</button>
               <button class="btn btn-success">Contact Us</button>
               <button class="btn btn-success">Products</button>
            </div>
         </div>

      <hr/>
      <br/>

      <div class="container-fluid">
         <img src="pic/medichumanpic.jpg" width="200" height="200">
         <img src="pic/medichumanpic.jpg" class= "rounded" width="200" height="200">
         <img src="pic/medichumanpic.jpg" class= "rounded-circle" width="200" height="200"> 
         <img src="pic/medichumanpic.jpg" class= "img-thumbnail" width="200" height="200">
      </div>
   </body>
</html>
