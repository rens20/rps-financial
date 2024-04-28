<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rpg Insurance</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    .orange{
        background-color: #ea580c;
    }
    .orage2{
        border: 2px solid #ea580c;
        color: #ea580c;
         background-color: #fff;
         transition: background-color 0.3s ease;
         text-decoration: none;
    }
    .orange2:hover{
            background-color: #ff6600; 
            color: #fff; 
    
    }
    .rounded-half {
            border-radius: 50%;
            width: 500px;
            height: auto;
            margin-top: 10%;
        }

    </style>
<body class="bg-slate-100">
    <div class="container mx-auto py-8 px-4">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2">
                <h1 class="text-3xl font-bold text-black mb-2">RPJ Insured Auto</h1>
                <p class="text-lg  text-black mb-4">Vehicle Insurance Information System For Rpg Insurance Agency</p>
                <div class="space-x-4">
                    <button id="login" class=" orange text-white font-bold py-2 px-4 rounded">Login</button>
                    <button id="signup" class=" orange2  font-bold py-2 px-4 rounded">Sign up</button>

                   
                </div>
                <h2 class="text-xl font-bold mt-8">About Us</h2>
                <br>
                <p>office sked
Monday-friday
8am-5pm</p>
<br>
<p>Services
-Comprehensive
-CTPL</p>
            </div>
            <div class="lg:w-1/2 mt-8 lg:mt-0">
                <img src="/image/vehicles.webp" alt="image" class="rounded-half">
            </div>
        </div>
    </div>
      <script>
          const login = document.getElementById("login").addEventListener("click", () =>{
            window.location.href = "login.php";
          });

          const signup = document.getElementById("signup").addEventListener("click", () =>{
            window.location.href = "signup.php";
          });
        </script>
</body>
</html>
