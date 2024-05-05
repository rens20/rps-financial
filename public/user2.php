<?php
// Placeholder for database connection
// $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');
require_once(__DIR__ . '/../config/configuration.php');

// Check if ID parameter is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch data from the database based on the ID
    $sql = "SELECT * FROM insurance_info WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Data found, display it
        $row = $result->fetch_assoc();
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Insurance Information</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
  
</head>
<style>
      body {
            font-family: Arial, sans-serif;
        }

        .info-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px; 
            max-width: 800px; 
            margin: 5px auto; 
            text-align: left; 
        }



        .info-container p strong {
            display: block; 
            font-weight: bold; 
        }
         #next {
            background: #ea580c;
            color: white;
        }
    </style>
<body>
    <div class="flex flex-col items-center">
    <div class="flex space-x-4">
       
        <button id="step1" class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">
            <span class="text-sm font-semibold">1</span>
        </button>
        <button id="step2" class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">
            <span class="text-sm font-semibold">2</span>
        </button>
        <button id="step3" class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">
            <span class="text-sm font-semibold">3</span>
        </button>
    </div>
</div>
    <h1 class="font-bold text-center text-3xl mb-8 pt-4">Insurance Information</h1>
    <div class="info-container mb-8">
        <div>
            <p><strong>Name of Assured:</strong> <?php echo $row['name']; ?></p>
            <p><strong>Address:</strong> <?php echo $row['address']; ?></p>
            <p><strong>Inception Date:</strong> <?php echo $row['inception_date']; ?></p>
            <p><strong>Expiry Date:</strong> <?php echo $row['expiry_date']; ?></p>
            <p><strong>Year Model:</strong> <?php echo $row['year_model']; ?></p>
            <p><strong>Make/Description:</strong> <?php echo $row['make_description']; ?></p>
        </div>
        <div>
            <p><strong>Chassis Number:</strong> <?php echo $row['chassis_number']; ?></p>
            <p><strong>Unit Type:</strong> <?php echo $row['unit_type']; ?></p>
            <p><strong>Engine Number:</strong> <?php echo $row['engine_number']; ?></p>
            <p><strong>Color:</strong> <?php echo $row['color']; ?></p>
            <p><strong>Plate Number:</strong> <?php echo $row['plate_number']; ?></p>
            <p><strong>Unit Price (₱):</strong> <?php echo $row['unit_price']; ?></p>
            <p><strong>Mortgagee / Financing:</strong> <?php echo $row['mortgagee_financing']; ?></p>
        </div>
    </div>
 
    <button class="btn ml-30" id="next" onclick="window.print()">Print</button>
    <script>
        const buttons = document.querySelectorAll('.flex button');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove background color from all buttons
            buttons.forEach(btn => btn.classList.remove('bg-orange-500', 'text-white'));
            // Add background color and text color to the clicked button
            button.classList.add('bg-orange-500', 'text-white');
            // Set a data attribute on the button to indicate the selected step
            button.dataset.selectedStep = true;
            // Navigate to the next page
            const selectedStep = button.id.replace('step', '');
            window.location.href = `user${selectedStep}.php`;
        });
    });
        </script>
</body>

</html>
<?php
    } else {
        // No data found for the provided ID
        echo "No data found.";
    }
} else {
    // ID parameter is missing or empty
    echo "ID parameter is missing.";
}
?>
