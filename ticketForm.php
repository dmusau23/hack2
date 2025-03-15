<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Ticket</title>
    <link rel="stylesheet" href="ticketForm.css">
    <script>
        // Function for validating form data
        function validateForm() {
            const eventName = document.querySelector('[name="eventName"]').value;
            const price = document.querySelector('[name="price"]').value;
            const rowNumber = document.querySelector('[name="rowNumber"]').value;
            const seatNumber = document.querySelector('[name="seatNumber"]').value;
            const eventTime = document.querySelector('[name="eventTime"]').value;

            // Validate Event Name: Exactly 10 characters and alphabetic
            const eventNameRegex = /^[A-Za-z]{10}$/;
            if (!eventNameRegex.test(eventName)) {
                alert("Event Name must be exactly 10 characters and contain only alphabetic characters.");
                return false;
            }

            // Validate Price: Only numeric values (positive number)
            const priceRegex = /^\d+(\.\d{1,2})?$/; // Optional decimal points
            if (!priceRegex.test(price)) {
                alert("Price must be a valid number.");
                return false;
            }

            // Validate Row and Seat Numbers: Must be numeric
            const rowSeatRegex = /^\d+$/;
            if (!rowSeatRegex.test(rowNumber) || !rowSeatRegex.test(seatNumber)) {
                alert("Row and Seat numbers must be numeric.");
                return false;
            }

            // Validate Event Time: Check if it's in a valid format (e.g., "HH:MM AM/PM")
            const timeRegex = /^(0[1-9]|1[0-2]):([0-5][0-9])\s(AM|PM)$/; // For 12-hour format with AM/PM
            if (!timeRegex.test(eventTime)) {
                alert("Event Time must be in the format 'HH:MM AM/PM'.");
                return false;
            }

            // If all validations pass, allow the form to submit
            return true;
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Buy Your Ticket</h2>
        <form action="printTicket.php" method="POST" onsubmit="return validateForm()">
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