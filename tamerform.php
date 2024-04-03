<?php
$servername = "Server: 127.0.0.1";
$username = "root";
$password = "";
$database = "jallikattu";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['tamer_submit'])) {
    // Retrieve form data
    $tamer_name = mysqli_real_escape_string($conn, $_POST['tamer_name']);
    $tamer_email = mysqli_real_escape_string($conn, $_POST['tamer_email']);
    $tamer_phone = mysqli_real_escape_string($conn, $_POST['tamer_phone']);
    $tamer_address = mysqli_real_escape_string($conn, $_POST['tamer_address']);
    $tamer_aadhar = mysqli_real_escape_string($conn, $_POST['tamer_aadhar']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $blood = mysqli_real_escape_string($conn, $_POST['blood']);
    $emergency_name = mysqli_real_escape_string($conn, $_POST['emergency_name']);
    $emergency_number = mysqli_real_escape_string($conn, $_POST['emergency_number']);

    $sql = "INSERT INTO tamer_data (tamer_name, tamer_email, tamer_phone, tamer_address, tamer_aadhar, weight, height, blood, emergency_name, emergency_number) 
            VALUES ('$tamer_name', '$tamer_email', '$tamer_phone', '$tamer_address', '$tamer_aadhar', '$weight', '$height', '$blood', '$emergency_name', '$emergency_number')";

    if (mysqli_query($conn, $sql)) {
        echo "Data has been successfully submitted.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>