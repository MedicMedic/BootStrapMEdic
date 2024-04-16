<html>
    <head>
        <title>3-BSCS-1</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="page-header">
                <h1>Employee's Payroll</h1>
            </div>
            <form method = "POST" action = "PHPactivity copy.php">
                <div class="row mb-3">
                    <label for="iDInput" class="col-form-label">Employee ID</label>
                    <input type="text" class="form-control" name="iDInput">
                </div>

                <div class="row mb-3">
                    <label for="lastNameInput" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastNameInput">
                </div>

                <div class="row mb-3">
                    <label for="firstNameInput" class="col-form-label">First Name</label>
                    <input type="text" class="form-control" name="firstNameInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="midNameInput" class="col-form-label">M.I.</label>
                    <input type="text" class="form-control" name="midNameInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="basicPayInput" class="col-form-label">Basic:</label>
                    <input type="number" class="form-control" name="basicPayInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="IncentivePayInput" class="col-form-label">Incentive pay:</label>
                    <input type="number" class="form-control" name="IncentivePayInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="HouseRentInput" class="col-form-label">House Rent Allowance</label>
                    <input type="number" class="form-control" name="HouseRentInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="MealInput" class="col-form-label">Meal Allowance</label>
                    <input type="number" class="form-control" name="MealInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="ProvidentFundInput" class="col-form-label">Provident Fund</label>
                    <input type="number" class="form-control" name="ProvidentFundInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="TaxInput" class="col-form-label">Tax</label>
                    <input type="number" class="form-control" name="TaxInput">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="LoanInput" class="col-form-label">Loan</label>
                    <input type="number" class="form-control" name="LoanInput">
                </div>

                <input class = "btn btn-success col-sm-6" type = "submit" value = "View Payslip">
            </form>
        </div>
    </body>

</html>