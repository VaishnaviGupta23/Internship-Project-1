<?php
session_start();

if(isset($_SESSION['isLoggedIn']))
{
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Page</title>
             <?php require_once("head.php")?>

        <style>
            body {
                background-color: #f8f9fa;
            }
            .welcome-container {
                text-align: center;
                padding: 50px;
                margin-top: 100px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            }
        </style>
    </head>
    <body>
    <div class="container welcome-container">
    <h2 class="mb-4">Welcome, <?php echo isset($_SESSION['username']) ?htmlspecialchars($_SESSION['username']) : 'Guest'; ?>!</h2>
        </div>
    </body>
    </html>

    <?php
}
else
{
    header("Location: login.php");
    die();
}
?>
