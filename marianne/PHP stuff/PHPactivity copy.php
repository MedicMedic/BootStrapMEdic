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

            <form method = "POST" action = "PHPactivity.php">
                <div class="row mb-3">
                    <label for="iDInput" class="col-form-label">Employee ID</label>
                    <input type="text" disabled class="form-control" name="iDInput" value="<?php echo isset($_POST['iDInput']) ? $_POST['iDInput'] : ''; ?>">
                </div>

                <div class="row mb-3">
                    <label for="lastNameInput" class="col-form-label">Last Name</label>
                    <input type="text" disabled class="form-control" name ="lastNameInput" value="<?php echo isset($_POST['lastNameInput']) ? $_POST['lastNameInput'] : ''; ?>">
                </div>

                <div class="row mb-3">
                    <label for="firstNameInput" class="col-form-label">First Name</label>
                    <input type="text" disabled class="form-control" id="firstNameInput" value="<?php echo isset($_POST['firstNameInput']) ? $_POST['firstNameInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="midNameInput" class="col-form-label">M.I.</label>
                    <input type="text" disabled class="form-control" id="midNameInput" value="<?php echo isset($_POST['midNameInput']) ? $_POST['midNameInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="basicPayInput" class="col-form-label">Basic:</label>
                    <input type="number" disabled class="form-control" id="basicPayInput" value="<?php echo isset($_POST['basicPayInput']) ? $_POST['basicPayInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="IncentivePayInput" class="col-form-label">Incentive pay:</label>
                    <input type="number" disabled class="form-control" id="IncentivePayInput" value="<?php echo isset($_POST['IncentivePayInput']) ? $_POST['IncentivePayInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="HouseRentInput" class="col-form-label">House Rent Allowance</label>
                    <input type="number" disabled class="form-control" id="HouseRentInput" value="<?php echo isset($_POST['HouseRentInput']) ? $_POST['HouseRentInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="MealInput" class="col-form-label">Meal Allowance</label>
                    <input type="number" disabled class="form-control" id="MealInput" value="<?php echo isset($_POST['MealInput']) ? $_POST['MealInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="ProvidentFundInput" class="col-form-label">Provident Fund</label>
                    <input type="number" disabled class="form-control" id="ProvidentFundInput" value="<?php echo isset($_POST['ProvidentFundInput']) ? $_POST['ProvidentFundInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="TaxInput" class="col-form-label">Tax</label>
                    <input type="number" disabled class="form-control" id="TaxInput" value="<?php echo isset($_POST['TaxInput']) ? $_POST['TaxInput'] : ''; ?>">
                </div>

                <div class="row mb-3 col-sm-6">
                    <label for="LoanInput" class="col-form-label">Loan</label>
                    <input type="number" disabled class="form-control" id="LoanInput" value="<?php echo isset($_POST['LoanInput']) ? $_POST['LoanInput'] : ''; ?>">
                </div>

                <input class = "btn btn-success col-sm-6" type = "submit" value = "Back">
            </form>
        </div>
    </body>

</html>