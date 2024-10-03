<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Bharadhinasanar Group of Schools</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="School Logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="founders.php">Founders</a></li>
                <li><a href="chairman.php">Chairman</a></li>
                <li><a href="vision.php">Vision</a></li>
                <li><a href="mission.php">Mission</a></li>
                <li><a href="directors.php">Board of Directors</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Contact Us</h1>
        <form method="POST" action="contact.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'db.php'; // Database connection

            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
            if (mysqli_query($conn, $sql)) {
                echo "<p>Message sent successfully!</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
            }

            mysqli_close($conn);
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Bharadhinasanar Group of Schools</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
