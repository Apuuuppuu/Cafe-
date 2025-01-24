<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        .back-button {
            margin-top: 15px;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $dish = htmlspecialchars($_POST['dish']);
            $message = htmlspecialchars($_POST['message']);
            echo "<h2>Order Successful!</h2>";
            echo "<p>Thank you, <strong>$name</strong>, for placing your order.</p>";
            echo "<ul>
                <li><strong>Dish Name:</strong> $dish</li>
                <li><strong>Address:</strong> $message</li>
            </ul>";
            echo "<p>We will deliver your order to the provided address soon.</p>";
        } else {
            echo "<p>No order data received. Please go back and try again.</p>";
        }
        ?>
        <a href="index.html" class="back-button">Go Back</a>
    </div>
</body>
</html>
