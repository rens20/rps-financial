<?php
require_once __DIR__ . '/../config/configuration.php';
// require_once __DIR__ . '../config/validation.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["total"], $_POST["vat"])) {
        // Retrieve form data
        $total = floatval($_POST["total"]);
        $vat = floatval($_POST["vat"]);

        // Proceed with your SQL insertion or other logic
    } else {
        // Handle the case when total or vat keys are not set
        echo "Error: Total or VAT data is missing.";
        exit; // Stop further execution
    }

    // Retrieve form data
    $policyNo = $_POST["policy_no"];
    $assuredName = $_POST["assured_name"];
    $address = $_POST["address"];
    $tpl = intval($_POST["tpl"]);
    $lossAndDamage = intval($_POST["loss_and_damage"]);
    $bodilyInjury = intval($_POST["bodily_injury"]);
    $appa = intval($_POST["appa"]);
    $aog = intval($_POST["aog"]);
    $deductible = intval($_POST["deductible"]);
    $towing = intval($_POST["towing"]);
    $repLim = intval($_POST["rep_lim"]);
    $total = floatval($_POST["total"]);
    $vat = floatval($_POST["vat"]);

    // Prepare SQL statement
    $sql = "INSERT INTO insurance_policies (policy_no, assured_name, address, tpl, loss_and_damage, bodily_injury, appa, aog, deductible, towing, rep_lim, total, vat)
            VALUES ('$policyNo', '$assuredName', '$address', $tpl, $lossAndDamage, $bodilyInjury, $appa, $aog, $deductible, $towing, $repLim, $total, $vat)";

    if ($conn->query($sql) === TRUE) {
        
     header("location:laster.php");

        exit; // Stop further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Policy Details</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>

        input[type="text"], input[type="number"] {
            background-color: #fff;
            border: 3px solid white;
            border-radius: 0.375rem; 
            padding: 0.75rem; 
            color: #000;
            width: 100%;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            outline: none;
            border-color:  #ea580c; 
        }
        #next {
            background: #ea580c;
            color: white;
        }
    </style>
</head>

<body class="bg-gray-100 p-4">
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
    <h2 class="text-xl font-bold mb-4">Insurance Policy Details</h2>

    <form method="post">
        <div class="mb-8">
            <label class="block mb-1">Policy No:</label>
            <input type="text" class="w-full rounded-md p-2" name="policy_no" value="PC0000000" readonly>
        </div>

        <div class="mb-8">
            <label class="block mb-1">Name of assured:</label>
            <input type="text" class="w-full rounded-md p-2" name="assured_name">
        </div>

        <div class="mb-8">
            <label class="block mb-1">Address:</label>
            <input type="text" class="w-full rounded-md p-2" name="address">
        </div>

        <table class="w-full mb-8">
            <th class="border border-gray-400 p-2"></th>
            <th class="border border-gray-400 p-2">Coverage</th>
            <th class="border border-gray-400 p-2">Premiums</th>
            <tr>
                <td class="border border-gray-400 p-2">TPl</td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 average" name="tpl" value="100000"></td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 premium" name="premium_tpl" value="7575"></td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">Loss and Damage</td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 average" name="loss_and_damage" value="75757"></td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 premium" name="premium_loss_damage" value="-2"></td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">Bodily Injury</td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 average" name="bodily_injury" value="7575757575"></td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 premium" name="premium_bodily_injury" value="0"></td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">APPA</td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 average" name="appa" value="7575"></td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 premium" name="premium_appa" value="0"></td>
            </tr>
            <tr>
                <td class="border border-gray-400 p-2">AOG</td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 average" name="aog" value="0"></td>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 premium" name="premium_aog" value="0"></td>
            </tr>
        </table>

        <h3 class="text-lg font-bold mb-4">Deductible and Charges</h3>

        <table class="w-full mb-8">
            <tr>
                <th class="border border-gray-400 p-2">Deductible</th>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 deductible" name="deductible" value="0"></td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">Towing</th>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 towing" name="towing" value="0"></td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">Rep. Lim</th>
                <td class="border border-gray-400 p-2"><input type="number" class="w-full rounded-md p-2 repLim" name="rep_lim" value="0"></td>
            </tr>
        </table>

        <h3 class="text-lg font-bold mb-4">Total Costs</h3>

        <table class="w-full mb-8">
            <tr>
                <th class="border border-gray-400 p-2">Total:</th>
                <td class="border border-gray-400 p-2 total" name="total"  id="total" readonly>0</td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">DOC Stamps (12.5%)</th>
                <td class="border border-gray-400 p-2" id="docStamps" readonly>0</td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">VAT (12%)</th>
                <td class="border border-gray-400 p-2" name="vat" id="vat" readonly>0</td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">LGT (0.2%)</th>
                <td class="border border-gray-400 p-2" id="lgt" readonly>0</td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">Other charges:</th>
                <td class="border border-gray-400 p-2" id="otherCharges" readonly>0</td>
            </tr>
            <tr>
                <th class="border border-gray-400 p-2">GROSS</th>
                <td class="border border-gray-400 p-2" id="gross" readonly>0</td>
            </tr>
        </table>
          <input type="hidden" name="total" id="total" value="0">
    <input type="hidden" name="vat" id="vat" value="0">
        <button type="submit" class="btn ml-30" id="next">Save</button>
    </form>
    <script>
        // Calculate total and update displayed values
        function calculateTotal() {
            let total = 0;
            let averageTotal = 0;
            let coverages = document.querySelectorAll('.average');
            let premiums = document.querySelectorAll('.premium');
            let deductible = parseInt(document.querySelector('.deductible').value);
            let towing = parseInt(document.querySelector('.towing').value);
            let repLim = parseInt(document.querySelector('.repLim').value);

            coverages.forEach(input => {
                averageTotal += parseInt(input.value);
            });

            premiums.forEach(input => {
                total += parseInt(input.value);
            });

            total += deductible + towing + repLim;

            let docStamps = total * 0.125;
            let vat = total * 0.12;
            let lgt = total * 0.002;

            document.getElementById('total').innerText = total;
            document.getElementById('docStamps').innerText = docStamps.toFixed(2);
            document.getElementById('vat').innerText = vat.toFixed(2);
            document.getElementById('lgt').innerText = lgt.toFixed(2);

            let otherCharges = 0; 
            let gross = total + docStamps + vat + lgt + otherCharges;
            document.getElementById('otherCharges').innerText = otherCharges.toFixed(2);
            document.getElementById('gross').innerText = gross.toFixed(2);

            
            let average = averageTotal / coverages.length;
            document.getElementById('average').innerText = average.toFixed(2);
        }

        // Call calculateTotal function when any coverage or deductible/towing/repLim input changes
        document.querySelectorAll('.average, .premium, .deductible, .towing, .repLim').forEach(input => {
            input.addEventListener('input', calculateTotal);
        });

        // Initial calculation on page load
        calculateTotal();


     
        document.getElementById('insuranceForm').addEventListener('submit', function(event) {
            event.preventDefault();

            //  AJAX
            fetch('admin1.php','admin2','admin3','backup', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Data saved successfully!');
                } else {
                    alert('Error: ' + data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

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
