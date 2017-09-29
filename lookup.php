<?php
    require_once('database.php');

    $userType = $_POST['userType'];
    $userValue = $_POST['userValue'];
    
    $query = "SELECT firstName, lastName FROM customers WHERE ".$userType." = ?
              ORDER BY customerID";
              
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $userValue);
    $stmt->execute();
    
    $stmt->store_result();
    $stmt->bind_result($firstName, $lastName);
?>
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

        <h1>Customer List</h1>

        <div id="content">
            <!-- display a table of customers -->
            
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                <?php while ($stmt->fetch()) : ?>
                <tr>
                    <td><?php echo $firstName; ?></td>
                    <td><?php echo $lastName; ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>

    <div id="footer">
        <p>&copy; <?php echo date("Y"); ?> Soylent Green, Inc.</p>
    </div>

    </div><!-- end page -->
</body>
</html>

<?php
    $stmt -> free_result();
    $db -> close();
?>