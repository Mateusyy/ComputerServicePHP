<!DOCTYPE HTML>
<html lang="pl">
<head>

    <title>Computer service Portal</title>
    <link rel="stylesheet" href="/app/assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/app/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="/app/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/app/assets/css/owl.transitions.css" type="text/css">
    <link href="/app/assets/css/slick.css" rel="stylesheet">
    <link href="/app/assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="/app/assets/css/font-awesome.min.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon-icon/apple-touch-icon-114-precomposed.html">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
    <body>
        <header class="topnav">
            <div class="container">
                <?php
                    if(isset($_SESSION['username'])) 
                    {
                        include_once 'adminNav.php'; 
                    }
                    else 
                    {   
                        include_once 'Nav.php';    
                    }
                ?>
            </div>
        </header>