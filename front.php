<!DOCTYPE html>
<html>
    <head>
        <title>TaxCalculator</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="tax.css">
    </head>
    <body>
        <div class="header">
            <h1>Welcome to the simple tax calculator</h1>
            <img src="logo.jpeg" alt="URA logo" width="200px" height="200px">
        </div>
        <h3>Let us help you calculate your tax payments.</h3>
        <p>Please enter the following relevant infirmation:</p>
        <br><br>
        <form action="results.php" method="POST">
        <fieldset>
            <legend><strong>Personal Information</strong></legend>
            Name: <input type="text" name="Name" required>
            <br><br>
            Salary: <input type="text" name="Salary" required placeholder = "In Ugx">
            <br><br>
            Allowances: <input type="text" name="Allowances" required placeholder="In Ugx">
            <br><br>
            Residential Status: 
            <select name="status" required>
                <option value="Resident">Resident</option>
                <option value="NonResident">NonResident</option>
            </select><br><br>
            Current Month: <input type="text" name="month">
            <br><br>
            <input type="submit" value="Done">
        </fieldset>
        </form>
    </body>
</html>