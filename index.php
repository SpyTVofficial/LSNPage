<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>LittleSpyNetwork</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='assets/style.css'>
        <script src='assets/scripts.js'></script>
        <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body style="background-color: #eeeeee;">
        <?php include "assets/header.php"; ?>
        <div class="main">
            <div class="top">
                <a href="https://littlespygames.tebex.io" class="button store"><i class="fa fa-shopping-cart" style="font-size:20px"></i> BESUCHE UNSEREN STORE</a>
                <a href="https://donorbox.org/littlespynetwork" class="button donate"><i class='fas fa-donate' style="font-size:20px"></i>  SPENDEN</a>
            </div>
        </div>
    <style>
        .top img{
            height: 20px;
            width: 20px;
        }
        .store a{
            color: #eeeeee;
            text-decoration: none;
        }
        .store a:hover{
            background-color: #ff4400;
        }
        .donate a{
            color: #eeeeee;
				text-decoration: none;
        }
        .donate a:hover{
            background-color: #ff4400;
        }
			.button {
            font-family: 'Roboto';
            background-color: #ff0000;
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-color: #dd0000;
            border-width: 2px;
            border-radius: 14px;
            border-style: solid;
        }
        .button:hover{
            background-color: #ff4400;
        }
    </style>
    <?php include "assets/footer.php"; ?>
    </body>

</html>