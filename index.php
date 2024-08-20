<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP App</title>

    <style>
        body, html {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .box {
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="box">
        <?php
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                echo "<h1>Hi, $name!</h1>";
            } else {
                echo "<h1>Hi, there!</h1>";
            }
        ?>
    </div>
</body>
</html>