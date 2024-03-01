<html>
   <head>
         <title>3-BSCS-1</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
         <script src="js/jquery.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
    </head>

   <body>
      <h1>Activity 4</h1>

      <div class = "container">
         <div class = "page-header">
            <h1>Form Validation Styles</h1>
         </div>
         <form>
            <div class="row mb-3">
               <label>Name</label>
               <input type="text" disabled class="form-control"></input>
            </div>

            <div class="row mb-3">
               <label for="nameInput" class="col-sm-2 col-form-label">Name</label>
               <input type="text" class="form-control is-invalid"><span class="bin bin-exclamation-diamond"></input></span>
            </div>

            <div class="row mb-3">
               <label for="nameInput" class="col-sm-2 col-form-label">Name</label>
               <input type="text" class="form-control is-valid"><span class="bin bin-check"></input></span>
            </div>

            <div class="row mb-3">
               <label for="nameInput" class="col-sm-2 col-form-label">Name</label>
               <input type="text" class="form-control is-invalid"><span class="bin bin-x"></span></input>
            </div>

         </form>

         <div class = "page-header">
            <h1>Form Validation Styles</h1>
         </div>
         <form class="row g-3">
            <div class="col-auto">
               <label for="nameInput1" class="form-label">Name</label>
               <input type="text" id="nameInput1" disabled class="form-control">
            </div>

            <div class="col-auto">
               <label for="nameInput2" class="form-label">Name</label>
               <input type="text" id="nameInput2" class="form-control is-invalid">
               <span class="bin bin-warning-sign"></span>
            </div>

            <div class="col-auto">
               <label for="nameInput3" class="form-label">Name</label>
               <input type="text" id="nameInput3" class="form-control is-valid">
               <span class="bin bin-ok"></span>
            </div>

            <div class="col-auto">
               <label for="nameInput4" class="form-label">Name</label>
               <input type="text" id="nameInput4" class="form-control is-invalid">
               <span class="bin bin-x"></span>
            </div>
         </form>

      </div>

      <br/>
      <br/>
      <hr/> 

      <div class = "container">

         <div class = "page-header">
            <h1>My Form Horizontal 2</h1>
         </div>
         <form>
            <div class="row mb-3">
               <label for="name" class="col-md-2 col-form-label">Enter your name</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="row mb-3">
               <label for="email" class="col-md-2 col-form-label">Enter your email</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="email">
               </div>
            </div>
            <div class="row mb-3">
               <label for="password" class="col-md-2 col-form-label">Enter your password</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="password">
               </div>
            </div>
            <div class="row mb-3">
               <label for="comment" class="col-md-2 col-form-label">Comment</label>
               <div class = "col-md-10">
                  <textarea class = "form-control" rows = "10"></textarea>
               </div>
            </div>
            <div class="row mb-3">
               <label class="col-md-2 col-form-label">Skills</label>
               <div class = "col-md-10">
                  <div class = "form-check">
                     <input class="form-check-input" type="checkbox">
                     <label class="form-check-label" for="phpCheckbox">PHP</label>
                  </div>
                  <div class = "form-check">
                     <input class="form-check-input" type="checkbox">
                     <label class="form-check-label" for="phpCheckbox">BOOTSTRAP</label>
                  </div>
                  <div class = "form-check">
                     <input class="form-check-input" type="checkbox">
                     <label class="form-check-label" for="phpCheckbox">JAVA</label>
                  </div>
               </div>
            </div>
            <div class="row mb-3">
               <label class="col-md-2 col-form-label">Skills</label>
               <div class="col-md-10">
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="phpCheckbox">
                     <label class="form-check-label" for="phpCheckbox">PHP</label>
                  </div>

                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="btsrpCheckbox">
                     <label class="form-check-label" for="btsrpCheckbox">BOOTSTRAP</label>
                  </div>

                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="checkbox" id="javaCheckbox">
                     <label class="form-check-label" for="javaCheckbox">JAVA</label>
                  </div>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-md-2 col-form-label">Gender</label>
               <div class="col-md-10">
                  <div class="form-radio">
                     <input class="form-radio-input" type="radio" name="gender">
                     <label class="form-radio-label">Male</label>
                  </div>
                  <div class="form-radio">
                     <input class="form-radio-input" type="radio" name="gender">
                     <label class="form-radio-label">Female</label>
                  </div>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-md-2 col-form-label">Gender</label>
               <div class="col-md-10">
                  <div class="form-radio form-radio-inline">
                     <input class="form-radio-input" type="radio" name="gender">
                     <label class="form-radio-label">Male</label>

                     <input class="form-radio-input" type="radio" name="gender">
                     <label class="form-radio-label">Female</label>
                  </div>
               </div>
            </div>

            <div class="row mb-3">
               <label class="col-md-2 col-form-label">Course</label>
               <div class="col-md-10">
                  <select class="form-control">
                     <option>BSCS</option>
                     <option>BSIT</option>
                     <option>BSIS</option>
                     <option>BSEMC</option>
                  </select>
               </div>
            </div>
            
            <div class="row mb-3">
               <div class="offset-md-2 col-md-10">
                  <button class="btn btn-success w-100">Click to Submit</button>
               </div>
            </div>

         </form>

         <div class = "page-header">
            <h1>My Form Horizontal</h1>
         </div>
         <form>
            <div class="row mb-3">
               <label for="name" class="col-md-2 col-form-label">Enter your name</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="row mb-3">
               <label for="name" class="col-md-2 col-form-label">Enter your email</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="row mb-3">
               <label for="name" class="col-md-2 col-form-label">Enter your password</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="row mb-3">
               <label for="name" class="col-md-2 col-form-label">Confirm your password</label>
               <div class="col-md-10">
                     <input type="text" class="form-control" id="name">
               </div>
            </div>
         </form>


         <div class = "page-header">
            <h1>My Form Inline</h1>
         </div>
         <form class="row g-3">
            <div class="col-md-6">
               <label for="name" class="form-label">Enter your name</label>
               <input type="text" class="form-control" id="name">
            </div>
            <div class="col-md-6">
               <label for="email" class="form-label">Enter your email</label>
               <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-6">
               <label for="password" class="form-label">Enter your password</label>
               <input type="password" class="form-control" id="password">
            </div>
            <div class="col-md-6">
               <label for="confirm_password" class="form-label">Confirm your password</label>
               <input type="password" class="form-control" id="confirm_password">
            </div>
         </form>



         <div class = "page-header">
            <h1>My Form Design</h1>
         </div>
         <form class = "col-md-8">
            <div class = "form-group">
               <label for = "name">Enter your name</label>
               <input type = "text" class = "form-control"></input>
            </div>
            <div class = "form-group">
               <label for = "name">Enter your email</label>
               <input type = "text" class = "form-control"></input>
            </div>
            <div class = "form-group">
               <label for = "name">Enter your password</label>
               <input type = "text" class = "form-control"></input>
            </div>
            <div class = "form-group">
               <label for = "name">Confirm your password</label>
               <input type = "text" class = "form-control"></input>
            </div>
         </form>
      </div>

      <br/>
      <br/>
      <hr/> 

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="#">College</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div>
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link" href="#">CCS</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">CET</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="#">CBA</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">CCS</a>
                  </li>
               </ul>
            </div>
         </div>
         </nav>

   </body>
</html>
