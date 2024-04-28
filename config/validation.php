<?php
function ValidateLogin($email, $password, ){
     
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
    $sql = "SELECT * FROM signup WHERE email = '$email' && password = '$password'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

function Register($email, $password, $con_password)
{
    if ($password !== $con_password) {
        return "Password and Confirm Password do not match";
    }

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // security sql injection!!!
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $con_password = mysqli_real_escape_string($conn, $con_password);

    //user data into database
    $insert = "INSERT INTO signup (email, password, con_password, type) VALUES ('$email', '$password', '$con_password', 'user')";
    if (mysqli_query($conn, $insert)) {
        $report = 'Registered Complete!';
        header("location: ../public/user.php");
    } else {
        $report = 'Error: ' . $insert . '<br>' . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    return $report;
}
