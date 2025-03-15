<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "stadiumEntry";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$eventName = $_POST['eventName'];
$price = $_POST['price'];
$rowNumber = $_POST['rowNumber'];
$seatNumber = $_POST['seatNumber'];
$eventTime = $_POST['eventTime'];
$ticketNumber = rand(100000, 999999); // Generate random ticket number

// Insert into database
$sql = "INSERT INTO ticket (eventName, price, rowNumber, seatNumber, eventTime, ticketNumber)
        VALUES ('$eventName', '$price', '$rowNumber', '$seatNumber', '$eventTime', '$ticketNumber')";

if ($conn->query($sql) === TRUE) {
    echo "Success!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Ticket</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="style2.css" media="print">
</head>
<body>
    <div class="ticket">
        <div class="left">
            <div class="event"><?php echo $eventName; ?></div>
            <div class="details">
                <div><?php echo $price; ?></div>
                <div><?php echo "ROW " . $rowNumber . " SEAT " . $seatNumber; ?></div>
                <div><?php echo $eventTime; ?></div>
            </div>
            <p>May you enjoy your FIFA World Cup 2026 game !</p>
        </div>
        <div class="right">
            <div class="admit">ADMIT ONE</div>
            <div><?php echo $ticketNumber; ?></div>
        </div>
    </div>

</body>
</html>
