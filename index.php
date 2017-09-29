<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Customer Manager</h1>
    </div>

    <div id="main">

        <h1>Customer Lookup</h1>

        <div id="content">
            <form action="lookup.php" method="post">

            <div id="data">
                <label>Search By:</label>
                <select name="userType">
                    <option value="customerID">ID</option>
                    <option value="firstName">First Name</option>
                    <option value="lastName">Last Name</option>
                </select>
                
                <br>

                <label>Using:</label>
                <input type="text" name="userValue"/><br />
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Lookup Customer(s)" /><br />
            </div>

            </form>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Soylent Green, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>