<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Ticket</title>
    <link rel="stylesheet" href="ticketForm.css">
</head>
<body>
    <div class="container">
        <h2>Buy Your Ticket</h2>
        <form action="printTicket.php" method="POST">
            <label>Event Name:</label>
            <input type="text" name="eventName" required>
            
            <label>Price:</label>
            <input type="text" name="price" required>
            
            <label>Row:</label>
            <input type="text" name="rowNumber" required>
            
            <label>Seat:</label>
            <input type="text" name="seatNumber" required>
            
            <label>Time:</label>
            <input type="text" name="eventTime" required>
            
            <button type="submit">Generate Ticket</button>
        </form>
    </div>

</body>
</html>

