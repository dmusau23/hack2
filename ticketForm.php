<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Ticket</title>
</head>
<body>

    <h2>Buy Your Ticket</h2>
    <div class="body">
    <form action="printTicket.php" method="POST">
        Event Name: <input type="text" name="eventName" required><br>
        Price: <input type="text" name="price" required><br>
        Row: <input type="text" name="rowNumber" required><br>
        Seat: <input type="text" name="seatNumber" required><br>
        Time: <input type="text" name="eventTime" required><br>
        <button type="submit">Generate Ticket</button>
    </form>
    </div>

</body>
</html>
