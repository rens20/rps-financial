<?php
require_once(__DIR__ . '/../config/validation.php');

// Initialize $email variable
$email = '';

// Check if email parameter exists in the URL
if (isset($_GET['email'])) {
    // Sanitize and assign the email value
    $email = htmlspecialchars($_GET['email']);
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
            width: 100%; 
        }

        @media (min-width: 640px) {
            .steps li {
                width: 50%; 
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
      
            <div class="border-b border-gray-200 pb-4">
                <p class="text-gray-600 font-semibold">Welcome, <?php echo $email; ?></p>
            </div>
            <div class="space-y-2">
                <h2 class="text-lg font-semibold">Follow the steps below very carefully</h2>
               <ul>
                 <li>Select insurance</li>
                <li>Issue Policy</li>
                 <li>Printing</li>
                 <li>Payment</li>
               </ul>
                <br>
                <p class="text-sm">Please select one</p>
            </div>
        </div>
    </div>
    <br>
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
        <p class="font-bold">Comprehensive Insurance</p>
        <br>
        <p>Comprehensive insurance is a type of automobile insurance that covers damage to your car from causes other than a collision. Comprehensive insurance will cover your vehicle if destroyed by a tornado, dented by a run-in with a deer, spray-painted by a vandal, damaged by a break-in, or crushed by a collapsing garage, among other causes. Comprehensive insurance, collision insurance, and liability insurance are the three components of an automobile insurance policy. In most states, the law requires drivers to carry liability insurance, but collision and comprehensive insurance are optional if someone owns a vehicle outright. 1f a person has financed the vehicle, the auto loan company might require comprehensive insurance.</p>
        <br>
        <p class="font-bold">KEY TAKEAWAYS</p>
        <br>
        <p>Comprehensive insurance is designed to pay for repairs to your vehicle caused by things other than a collision. If you finance a vehicle purchase, you may be required to purchase comprehensive coverage as well as collision coverage. Purchasing comprehensive coverage may not make sense financially if you drive an older vehicle that is already lost a significant amount of value. Raising your deductibles for comprehensive insurance could help to lower your premiums.</p>
        <br>
        <button class="btn" onclick="selectInsurance(this)">Select</button>
    </div>
    <br>

    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
        <p class="font-bold">Compulsory Third Party (CTP) insurance</p>
        <br>
        <p>Your Compulsory Third Party (CTP) insurance is paid at the same time as your motor vehicle registration. Just as<br> registration of your vehicle is compulsory, so is CTP insurance.
        </p>
        <br>
        <p>The Policy of Insurance protects you (and other people who use your registered and insured vehicle, with or without<br> your consent) against the financial impact of causing injury or death to other road users through the use of your<br> vehicle anywhere in the Philippines</p>
        <br>
        <p class="font-bold"> CTP insurance does not cover:</p>
        <br>
        <p>damage to property (including to a vehicle or its contents) an at-fault cyclist who injures themselves or another road<br> user causing injury or death to another participant in a road race the driver of a single car accident, for example if you<br> hit a tree (with the exception of very serious, lifelong injuries which may be covered under the Lifetime Support<br> Scheme). If you fail to perform the obligations outlined in the Policy of Insurance and your conduct causes an injury, the<br> insurer has the right to potentially recover from you the costs of injury claims arising out of that accident.</p>
        <br>
        <p class="font-bold">Obligations under the Policy of Insurance include not:</p>
        <li>driving while under the influence of alcohol or drugs </li>
        <li>driving dangerously</li>
        <li>intentionally causing injury</li>
        <li>driving a vehicle without the owner’s permission</li>
        <li>driving without holding a current driver’s licence</li>
        <li>driving an unroadworthy or overloaded vehicle</li>
        <br>
        <button class="btn" onclick="selectInsurance(this)">Select</button>
    </div>
    <div class="max-w-lg mx-auto rounded-lg shadow-md p-6">
        <button class="btn ml-30" id="next">Next</button>
    </div>
 <script>
        function toggleColor(element, event) {
            const steps = document.querySelectorAll('.steps li');
            steps.forEach(step => {
                step.classList.remove('bg-orange-500', 'text-white');
            });

            // Add orange color to the clicked step
            element.classList.add('bg-orange-500', 'text-white');

            // Revert color of the previous step
            if (element.previousElementSibling) {
                element.previousElementSibling.classList.remove('bg-orange-500', 'text-white');
            }

            // Prevent default behavior of the click event
            event.preventDefault();
        }

        function selectInsurance(button) {
            const selectedDiv = button.parentElement;
            const otherDivs = document.querySelectorAll('.max-w-lg.mx-auto.bg-white.rounded-lg.shadow-md.p-6');

            // Remove border color from other divs
            otherDivs.forEach(div => {
                div.classList.remove('selected');
            });

            // Add border color to the selected div
            selectedDiv.classList.add('selected');
        }

        const nextButton = document.getElementById("next");
        nextButton.addEventListener("click", () => {
            // Add your logic for what should happen on the "Next" button click
            window.location.href = "user1.php";
        });
    </script>
</body>
</html>