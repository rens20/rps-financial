<?php
// Placeholder for database connection
// $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
require_once(__DIR__ . '/../config/configuration.php');
require_once(__DIR__ . '/../config/validation.php');

// Initialize variables with default values
$name = '';
$address = '';
$issue_date = '';
$inception_date = '';
$expiry_date = '';
$year_model = '';
$make_description = '';
$chassis_number = '';
$unit_type = '';
$engine_number = '';
$color = '';
$plate_number = '';
$unit_price = '';
$mortgagee_financing = '';

// Check if form is submitted and assign form data to variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $issue_date = isset($_POST['issue_date']) ? $_POST['issue_date'] : '';
    $inception_date = isset($_POST['inception_date']) ? $_POST['inception_date'] : '';
    $expiry_date = isset($_POST['expiry_date']) ? $_POST['expiry_date'] : '';
    $year_model = isset($_POST['year_model']) ? $_POST['year_model'] : '';
    $make_description = isset($_POST['make_description']) ? $_POST['make_description'] : '';
    $chassis_number = isset($_POST['chassis_number']) ? $_POST['chassis_number'] : '';
    $unit_type = isset($_POST['unit_type']) ? $_POST['unit_type'] : '';
    $engine_number = isset($_POST['engine_number']) ? $_POST['engine_number'] : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $plate_number = isset($_POST['plate_number']) ? $_POST['plate_number'] : '';
    $unit_price = isset($_POST['unit_price']) ? $_POST['unit_price'] : '';
    $mortgagee_financing = isset($_POST['mortgagee_financing']) ? $_POST['mortgagee_financing'] : '';

    // Insert data into the database
    $sql = "INSERT INTO insurance_info (name, address, issue_date, inception_date, expiry_date, year_model, make_description, chassis_number, unit_type, engine_number, color, plate_number, unit_price, mortgagee_financing)
            VALUES ('$name', '$address', '$issue_date', '$inception_date', '$expiry_date', '$year_model', '$make_description', '$chassis_number', '$unit_type', '$engine_number', '$color', '$plate_number', '$unit_price', '$mortgagee_financing')";

    if ($conn->query($sql) === TRUE) {
        // Get the ID of the last inserted record
        $last_id = $conn->insert_id;
        // Redirect to user2.php with the ID parameter
       // Redirect to user1.php with the email parameter
   header("Location: user2.php?id=$last_id");
exit(); // Ensure no further code execution after redirection
 // Ensure no further code execution after redirection
    } else {
        // Display an error message if the SQL query fails
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        .steps li {
            width: 100%; /* Default width */
        }

        @media (min-width: 640px) {
            .steps li {
                width: 50%; /* 2 columns on larger screens */
            }
        }

        .btn {
            border: 2px solid #ea580c;
        }

        .btn:hover {
            background: #ea580c;
            color: white;
        }

        #next {
            background: #ea580c;
            color: white;
        }

        .selected {
            border: 2px solid #ea580c;
        }
    </style>
</head>

<body class="bg-slate-100 p-6">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="space-y-4">
          
            <div class="space-y-2">
                <h2 class="text-lg font-semibold">Follow the steps below very carefully</h2>
                <p class="text-sm">Please select one</p>
            </div>
        </div>
            <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6 grid grid-cols-2 gap-4">
        <!-- Left Column -->
        <div>
        
            <form action = "" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name of Assured</label>
                    <input type="text" id="name" name="name" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" id="address" name="address" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="inception_date" class="block text-sm font-medium text-gray-700">Inception Date</label>
                    <input type="text" id="inception_date" name="inception_date" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="year_model" class="block text-sm font-medium text-gray-700">Year Model</label>
                    <input type="text" id="year_model" name="year_model" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="chassis_number" class="block text-sm font-medium text-gray-700">Chassis Number</label>
                    <input type="text" id="chassis_number" name="chassis_number" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="engine_number" class="block text-sm font-medium text-gray-700">Engine Number</label>
                    <input type="text" id="engine_number" name="engine_number" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                  <div class="mb-4">
                    <label for="mortgagee_financing" class="block text-sm font-medium text-gray-700">Mortgagee / Financing</label>
                    <input type="text" id="mortgagee_financing" name="mortgagee_financing" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
    
        </div>
        <!-- Right Column -->
        <div>
         
                <div class="mb-4">
                    <label for="issue_date" class="block text-sm font-medium text-gray-700">Issue Date</label>
                    <input type="text" id="issue_date" name="issue_date" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="expiry_date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                    <input type="text" id="expiry_date" name="expiry_date" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="make_description" class="block text-sm font-medium text-gray-700">Make/Description</label>
                    <input type="text" id="make_description" name="make_description" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="unit_type" class="block text-sm font-medium text-gray-700">Unit Type</label>
                    <input type="text" id="unit_type" name="unit_type" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                    <input type="text" id="color" name="color" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="plate_number" class="block text-sm font-medium text-gray-700">Plate Number</label>
                    <input type="text" id="plate_number" name="plate_number" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="unit_price" class="block text-sm font-medium text-gray-700">Unit Price (₱)</label>
                    <input type="text" id="unit_price" name="unit_price" required  class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                       <button  type="submit" class="btn ml-30" id="next">save</button>
            </form>
        </div>
       
    </div>
        </div>
    </div>
    <script>
      // Get the Next button by its ID
    // const nextButton = document.getElementById('next');

    // // Add an event listener to the Next button for the click event
    // nextButton.addEventListener('click', function() {
    //   // Redirect to the next page when the button is clicked
    //   window.location.href = 'user2.php'; // Replace 'suer2.php' with the actual URL of your next page
    // });
        </script>
</body>
</html>