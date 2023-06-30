<!DOCTYPE html>
<html>
<head>
    <title>Hotel Reservation Form</title>
</head>
<body>
    <h1>Hotel Reservation Form</h1>

    <form method="POST" action="process_reservation.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="checkin">Check-in Date:</label>
        <input type="date" id="checkin" name="checkin" required><br><br>

        <label for="checkout">Check-out Date:</label>
        <input type="date" id="checkout" name="checkout" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
