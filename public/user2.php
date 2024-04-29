<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
   <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .print-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>User Data</h1>

    <?php
    require_once(__DIR__ . '/../config/configuration.php');
   
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch data from the database
    $sql = "SELECT * FROM insurance_info";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Display data in a table
        echo '<table>';
        echo '<tr><th>Name</th><th>Address</th><th>Issue Date</th><th>Inception Date</th><th>Expiry Date</th><th>Year Model</th><th>Make/Description</th><th>Chassis Number</th><th>Unit Type</th><th>Engine Number</th><th>Color</th><th>Plate Number</th><th>Unit Price</th><th>Mortgagee/Financing</th></tr>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['issue_date'] . '</td>';
            echo '<td>' . $row['inception_date'] . '</td>';
            echo '<td>' . $row['expiry_date'] . '</td>';
            echo '<td>' . $row['year_model'] . '</td>';
            echo '<td>' . $row['make_description'] . '</td>';
            echo '<td>' . $row['chassis_number'] . '</td>';
            echo '<td>' . $row['unit_type'] . '</td>';
            echo '<td>' . $row['engine_number'] . '</td>';
            echo '<td>' . $row['color'] . '</td>';
            echo '<td>' . $row['plate_number'] . '</td>';
            echo '<td>' . $row['unit_price'] . '</td>';
            echo '<td>' . $row['mortgagee_financing'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "No records found";
    }

    // Close connection
    mysqli_close($conn);
    ?>
        <?php
    echo '<form method="post"><input type="submit" name="print_btn" class="print-btn" value="Print Table"></form>';
    ?>

   
 <script>
         document.addEventListener('DOMContentLoaded', function () {
            var printBtn = document.querySelector('.print-btn');
            printBtn.addEventListener('click', function () {
                window.print();
            });
        });
    </script>
</body>

</html>
