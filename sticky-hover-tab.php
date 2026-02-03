<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sticky Hover Tab Right</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sticky hover tab */
        .sticky-tab {
            position: fixed;
            top: 40%;
            right: 0;
            background-color: #007bff;
            color: white;
            padding: 10px;
            padding-left: 20px;
            border-radius: 8px 0 0 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 9999;
            width: 40px;
            overflow: hidden;
        }

        .sticky-tab:hover {
            width: 220px;
        }

        .sticky-tab-content {
            white-space: nowrap;
            overflow: hidden;
        }

        .sticky-tab i {
            margin-right: 8px;
        }

        a.tab-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Sample page content */
        .container {
            padding: 60px 20px;
        }

        h2 {
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <!-- Sticky Hover Tab -->
    <div class="sticky-tab">
        <div class="sticky-tab-content">
            <a class="tab-link" href="Privacypolicy.php"><i>📩</i> Privacypolicy</a>
        </div>
    </div>

    <!-- Page Content
    <div class="container">
        <h1>Welcome to Our Job Portal</h1>
        <p>This is a sample page to demonstrate the sticky hover tab on the right.</p>

        <h2 id="contact">Contact Us</h2>
        <p>If you have any questions, feel free to reach out to our support team.</p> -->

    <!-- Optional Contact Form -->
    <!-- <form method="POST" action="">
            <label for="name">Your Name:</label><br>
            <input type="text" name="name" required><br><br>

            <label for="message">Your Message:</label><br>
            <textarea name="message" rows="4" required></textarea><br><br>

            <input type="submit" name="submit" value="Send Message">
        </form>
    </div> -->

    <!-- PHP Form Handler -->
    <!--<?php
        // if (isset($_POST['submit'])) {
        //     $name = htmlspecialchars($_POST['name']);
        //     $message = htmlspecialchars($_POST['message']);

        // Save to file (or send to email/database)
        //     $entry = "Name: $name\nMessage: $message\n---\n";
        //     file_put_contents("contact_messages.txt", $entry, FILE_APPEND);

        //     echo "<script>alert('Thank you, $name! Your message has been received.');</script>";
        // }
        // 
        ?> -->

</body>

</html>