<?php
require_once(__DIR__ . '/../config/configuration.php');

// Check if the user is logged in or redirect to login page if not
// You can implement your authentication logic here

// Function to fetch all insurance policies data
function getAllInsurancePolicies()
{
    global $conn; // Assuming $conn is your database connection object

    // Query to select all records from the insurance_policies table
    $sql = "SELECT * FROM insurance_policies";

    // Execute the query
    $result = $conn->query($sql);

    $policies = array();

    // Check if there are any results
    if ($result->num_rows > 0) {
        // Fetch data from each row and add it to the $policies array
        while ($row = $result->fetch_assoc()) {
            $policies[] = $row;
        }
    }

    // Return the array of policies
    return $policies;
}

// Fetch insurance policies
$policies = getAllInsurancePolicies();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Include any necessary CSS stylesheets -->

    <style>
        /* CSS styles for table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
        .print {
            background-color: orangered;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Insurance Policies</h1>

    <button class="print" onclick="printTable()">Print Table</button>

    <table>
        <thead>
            <tr>
            <th>Policy No</th>
            <th>Assured Name</th>
            <th>Address</th>
            <th>TPL</th>
            <th>Loss and Damage</th>
            <th>Bodily Injury</th>
            <th>APPA</th>
            <th>AOG</th>
            <th>Deductible</th>
            <th>Towing</th>
            <th>Rep. Lim</th>
            <th>Total</th>
            <th>VAT</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policies as $policy) : ?>
                <tr>
                    <td><?php echo $policy['policy_no']; ?></td>
                    <td><?php echo $policy['assured_name']; ?></td>
                    <td><?php echo $policy['address']; ?></td>
                    <td><?php echo $policy['tpl']; ?></td>
                    <td><?php echo $policy['loss_and_damage']; ?></td>
                    <td><?php echo $policy['bodily_injury']; ?></td>
                    <td><?php echo $policy['appa']; ?></td>
                    <td><?php echo $policy['aog']; ?></td>
                    <td><?php echo $policy['deductible']; ?></td>
                    <td><?php echo $policy['towing']; ?></td>
                    <td><?php echo $policy['rep_lim']; ?></td>
                    <td><?php echo $policy['total']; ?></td>
                    <td><?php echo $policy['vat']; ?></td>

                  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function printTable() {
            window.print();
        }
    </script>
</body>

</html>
