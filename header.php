<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="dist/images/logo-32.png">

        <title>Demo for WKmaterial with Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="dist/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Roboto fonts -->
        <link href="dist/css/roboto.css" rel="stylesheet">
        <!-- Material Design Iconic fonts -->
        <link href="dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- WKmaterial core CSS -->
        <link href="dist/css/wkmaterial.css" rel="stylesheet">
        <!-- WKmaterial colors CSS -->
        <link href="dist/css/wkmaterial-colors.css" rel="stylesheet">

        <!-- Custom style -->
        <style type="text/css">
            body { padding-top: 70px; padding-bottom: 30px; }
            .btn-demo .btn { margin: 0 5px 7px 0; }
            .btn-colors > .btn { min-width: 112px; }
            .color-block { border-radius: 2px; color: rgba(255, 255, 255, 0.9); height: 100px; margin-bottom: 25px; padding: 15px 0; text-align: center; }
            .color-block span { display: block; }
            .color-block .color { font-size: 14px; text-transform: uppercase; }
            .color-block .code { margin: 5px 0; }
            .color-block .less { font-size: 11px; }
            .color-subblock:first-child { border-radius: 2px 2px 0 0; }
            .color-subblock { color: rgba(255, 255, 255, 0.9); padding: 5px 0; text-align: center; }
            .color-subblock:last-child { border-radius: 0 0 2px 2px; margin-bottom: 25px; }
            .color-subblock .color { float: left; padding-left: 10px; text-transform: uppercase; }
            .color-subblock .less { float: right; padding-right: 10px; font-size: 11px }
        </style>

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="dist/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="dist/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="dist/js/html5shiv.min.js"></script>
            <script src="dist/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body role="document">

        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bootstrap theme</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if ( !isset($_GET['page']) ) echo 'class="active"'; ?>><a href="index.php">Home</a></li>
                        <li <?php if ( isset($_GET['page']) and $_GET['page'] == 'typography' ) echo 'class="active"'; ?>><a href="?page=typography">Typography</a></li>
                        <li <?php if ( isset($_GET['page']) and $_GET['page'] == 'buttons' ) echo 'class="active"'; ?>><a href="?page=buttons">Buttons</a></li>
                        <li <?php if ( isset($_GET['page']) and $_GET['page'] == 'colors' ) echo 'class="active"'; ?>><a href="?page=colors">Colors</a></li>
                        <li <?php if ( isset($_GET['page']) and $_GET['page'] == 'tables' ) echo 'class="active"'; ?>><a href="?page=tables">Tables</a></li>
                        <li <?php if ( isset($_GET['page']) and $_GET['page'] == 'about' ) echo 'class="active"'; ?>><a href="?page=about">About</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container theme-showcase" role="main">