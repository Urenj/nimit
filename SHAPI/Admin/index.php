<?php
    include ('assets/config/db.php');
    $sql = 'SELECT id, client_name, contact_info, due, style, client_details, client_description FROM contract';
    $result = mysqli_query($con, $sql);

// Assume you have a query to fetch the current status for the user with the given $email
$email = 'neru@gmail.com';

// Assume you have a query to fetch the current status for the user with the given $email
$query = "SELECT status FROM users WHERE email = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->bind_result($userStatus);

// Check if the status is fetched successfully
if ($stmt->fetch()) {
    // The status is fetched successfully

    // You can close the statement here if you're not fetching anything else
    $stmt->close();
} else {
    // Error fetching the status
    $userStatus = 'Hiatus'; // Default to hiatus if there's an error
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['newStatus'])) {
    $newStatus = $_POST['newStatus'];

    // Assume you have a column named 'status' in your 'users' table
    $updateQuery = "UPDATE users SET status = ? WHERE email = ?";
    $updateStmt = $con->prepare($updateQuery);
    $updateStmt->bind_param('ss', $newStatus, $email);

    if ($updateStmt->execute()) {
        echo 'Status updated successfully';
    } else {
        echo 'Error updating status: ' . $updateStmt->error;
    }

    // Close the update statement
    $updateStmt->close();
}



// Close the connection (for demonstration purposes, adjust as needed in your actual code)
$con->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <link rel="stylesheet" href="assets\css\dashboard.css">
    <link rel="stylesheet" href="assets\css\materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script defer src="assets\js\materialize.min.js"></script>
    <script defer src="assets\js\dashboard.js"></script>
</head>

<body>
    <div class="main-wrapper">
        <?php
        include "admin-nav.php";
        ?>
        <article class="wrapper-dashboard">
        <div class="dashboard">
                <div class="status-wrapper">
                    <fieldset class="status-box">
                        <legend class="legend">Status</legend>
                             <div class="toggle-button">
                             <input type="checkbox" id="toggle" onchange="updateStatus()" <?php echo ($userStatus == 'Active') ? 'checked' : ''; ?>>
                                <label for="toggle" class="slider"></label>
                             </div>
                             <p id="status"><?php echo ucfirst($userStatus); ?></p>

                    </fieldset>
                </div>
                <div class="current-client-wrapper">
                    <fieldset class="current-client-box">
                        <legend class="legend">Current Clients</legend> 
                       
                                <?php
                                    include ('assets/config/db.php');

                                    $clientquery = "SELECT * FROM contract";
                                    $totalclient = mysqli_query($con, $clientquery);

                                    if($totalresult = mysqli_num_rows($totalclient))
                                    {
                                        echo "<p id='client-count'>".$totalresult."</p> ";
                                    }
                                    else
                                    {
                                        echo "<p id='client-count'>0</p>";
                                    }
                                    $con -> close();
                                ?>
                    </fieldset>
                </div>
                <div class="contract-wrapper">
                    <fieldset class="contract-box">
                        <legend class="legend">Contract</legend>

                        <table class="centered responsive">
                            
                            <thead>
                                <tr>
                                    <th class=" yellow-text">ID</th>
                                    <th class=" yellow-text">Client Name</th>
                                    <th class=" yellow-text">Contact Info</th>
                                    <th class=" yellow-text">Due</th>
                                    <th class=" yellow-text">Style</th>
                                    <th class=" yellow-text">Details</th>
                                    <th class=" yellow-text">Description</th>
                                    <th class=" yellow-text">Status</th>

                                </tr>
                            </thead>

                            <tbody>
                            <?php
                           include ('assets/config/db.php');
                            if($result ->num_rows > 0)
                            {
                                $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                foreach($rows as $row)
                                {
                                    echo    "
                                              <tr>
                                              <td>$row[id]</td>
                                              <td>" . htmlspecialchars($row['client_name']) . "</td>
                                              <td>" . htmlspecialchars($row['contact_info']) . "</td>
                                              <td>" . htmlspecialchars($row['due']) . "</td>
                                              <td>" . htmlspecialchars($row['style']) . "</td>
                                              <td>" . htmlspecialchars($row['client_details']) . "</td>
                                              <td>" . htmlspecialchars($row['client_description']) . "</td>
                                              <td><a class='waves-effect waves-light btn yellow darken-2' href='\Admin\done.php?id= $row[id]'>Done</a></td>
                                             </tr> 
                                           ";
                                }
                            }
                            mysqli_free_result($result);
                            mysqli_close($con);
                            ?>
                          
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
        </article>
        <script>
            function updateStatus() {
                var toggle = document.getElementById('toggle');
                var statusLabel = document.getElementById('statusLabel');
                var newStatus = toggle.checked ? 'Active' : 'Hiatus';

                statusLabel.textContent = newStatus;

                // Send an AJAX request to update the database
                $.ajax({
                    url: 'update_status.php', // Replace with the actual file handling the update
                    method: 'POST',
                    data: { newStatus: newStatus },
                    success: function (response) {
                        console.log('Database updated successfully');
                    },
                    error: function (error) {
                        console.error('Error updating database:', error);
                    }
                });
            }
    </script>
</body>
</html>


