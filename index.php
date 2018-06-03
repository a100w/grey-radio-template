<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $name; ?> Website">
    <meta name="author" content="a100w">

    <title><?php echo $name; ?></title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

    <link href="css/grayscale.min.css" rel="stylesheet">
    <style type="text/css">
        .button {
            background-color: #999999;
            border: none;
            color: white;
            padding: 15px 32px;
            border-radius: 60px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        iframe{
            overflow:hidden;
        }
    </style>
    <script type="text/javascript">
        function refreshContent() {
            $("[name=stats]").load("current.php");
        }
       
        $(document).ready(function(){
            window.setInterval("refreshContent()", 300);
            refreshContent();
        });
    </script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Men&uuml; <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light"><?php echo $name; ?></span>
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Über uns</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#radio">Radio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Impressum</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php echo $name; ?></h1>
                        <p class="intro-text">Das musst du hören.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Wer sind wir?</h3>
                <p>Wir sind <?php echo $name; ?>, wir sind ein schnell wachsendes, junges Radio. Wir bieten dir kostenlose MusikBots für deinen TeamSpeak³-Server an, da wo natürlich unser Radio drauf läuft. ;-)</p>
            </div>
        </div>
    </section>

    <section id="radio" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                <div name="stats">
                <h2>L&auml;dt..</h2>
                </div>
<iframe width="800" height="140" id="widget" name="widget" border="0" style="border:0px" allowtransparency="true" scrolling="no" src="//laut.fm/widgets/player_for/<?php echo $station; ?>,?player%5Bstations%5D=<?php echo $station; ?>%2C&player%5Bcolor%5D%5Bcolor%5D=white&player%5Bshadow%5D=true&player%5Bdisplay%5D%5Bborder%5D%5Bradius%5D=10px&player%5Bcolor%5D%5Bbackground_to%5D=%23666666&player%5Bcolor%5D%5Bbackground_from%5D=%23333333&player%5Bborder%5D%5Bcolor%5D=%23cccccc&player%5Bborder%5D%5Bwidth%5D=0px&player%5Bbutton%5D%5Bcolor%5D%5Bbackground_to%5D=%23333333&player%5Bbutton%5D%5Bcolor%5D%5Bbackground_from%5D=%23111111&player%5Bbutton%5D%5Bborder%5D%5Bcolor%5D=%23333333&player%5Bbutton%5D%5Bborder%5D%5Bwidth%5D=2px">widget</iframe>
                    <h5>Stream hosted by <a href="https://laut.fm/<?php echo $station; ?>">laut.fm</a></h5>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h3>Kontakt</h3>
                <p><?php echo $yourname; ?><br><?php echo $yourstreet; ?><br><?php echo $yourcity; ?></p>
                <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/randyfmde" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?> | Coded with <span class="glyphicon glyphicon-tint" aria-hidden="true"></span> & <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> by <a href="https://github.com/a100w" target="_blank">a100w</a></p>
        </div>
    </footer>

    <script src="vendor/jquery/jquery.js"></script>
    <script>
        var audio = document.getElementById("player");
        audio.volume = 0.05;
    </script>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="js/grayscale.min.js"></script>

</body>

</html>
