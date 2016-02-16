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
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container theme-showcase" role="main">

            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Demo for WKmaterial</h1>
                <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
            </div>


            <div class="page-header">
                <h2>Buttons</h2>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Basic Examples <small>Use any of the available button classes to quickly create a styled button.</small></h2>
                </div>

                <div class="card-body card-padding">
                    <p class="f-500 txt-black m-b-20">Bootstrap Color Schemes</p>

                    <div class="btn-demo">
                        <button class="btn btn-default waves-effect">Default</button>
                        <button class="btn btn-info waves-effect">Info</button>
                        <button class="btn btn-primary waves-effect">Primary</button>
                        <button class="btn btn-success waves-effect">Success</button>
                        <button class="btn btn-warning waves-effect">Warning</button>
                        <button class="btn btn-danger waves-effect">Danger</button>
                        <button class="btn btn-link waves-effect">Link</button>
                    </div>

                    <br>
                    <br>

                    <p class="f-500 txt-black m-b-20">Optional Material Design Colors</p>

                    <div class="btn-colors btn-demo"> <!-- Optional container for demo porpose only -->
                        <button class="btn bg-cyan waves-effect">Cyan</button>
                        <button class="btn bg-teal waves-effect">Teal</button>
                        <button class="btn bg-amber waves-effect">Amber</button>
                        <button class="btn bg-orange waves-effect">Orange</button>
                        <button class="btn bg-deep-orange waves-effect">Deep Orange</button>
                        <button class="btn bg-red waves-effect">Red</button>
                        <button class="btn bg-pink waves-effect">Pink</button>
                        <button class="btn bg-light-blue waves-effect">Light Blue</button>
                        <button class="btn bg-blue waves-effect">Blue</button>
                        <button class="btn bg-indigo waves-effect">Indigo</button>
                        <button class="btn bg-lime waves-effect">Lime</button>
                        <button class="btn bg-light-green waves-effect">Light Green</button>
                        <button class="btn bg-green waves-effect">Green</button>
                        <button class="btn bg-purple waves-effect">Purple</button>
                        <button class="btn bg-deep-purple waves-effect">Deep Purple</button>
                        <button class="btn bg-gray waves-effect">Gray</button>
                        <button class="btn bg-blue-gray waves-effect">Blue Gray</button>
                        <button class="btn bg-black waves-effect">Black</button>
                    </div>

                    <br>
                    <br>

                    <p class="f-500 txt-black m-b-5">Button Sizes</p>
                    <small>Fancy larger or smaller buttons? Add the button sizing classes.</small>

                    <br>
                    <br>

                    <div class="btn-demo">
                        <button class="btn btn-primary btn-lg waves-effect">Large</button>
                        <button class="btn btn-primary waves-effect">Default</button>
                        <button class="btn btn-primary btn-sm waves-effect">Small</button>
                        <button class="btn btn-primary btn-xs waves-effect">Extra Small</button>
                    </div>

                    <br>
                    <br>

                    <p class="f-500 txt-black m-b-20">Disable Stat</p>

                    <div class="btn-demo">
                        <button disabled="disabled" class="btn btn-default waves-effect">Default</button>
                        <button disabled="disabled" class="btn btn-info waves-effect">Info</button>
                        <button disabled="disabled" class="btn btn-primary waves-effect">Primary</button>
                        <button disabled="disabled" class="btn btn-success waves-effect">Success</button>
                        <button disabled="disabled" class="btn btn-warning waves-effect">Warning</button>
                        <button disabled="disabled" class="btn btn-danger waves-effect">Danger</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h2>Button Icons <small>You can refer the Icons page for the complete list of Font Icons which are inspired by Material Design</small></h2>
                </div>
                <div class="card-body card-padding">
                    <div class="btn-demo">
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-home"></i> Home</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-search"></i> Search</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-more-vert"></i> More</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-arrow-backward"></i> Back</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-refresh"></i> Sync</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-check"></i> Check</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-close"></i> Check</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-menu"></i> Menu</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-apps"></i> Apps</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-check-all"></i> Done</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-trending-up"></i> Up</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-apps"></i> Get</button>
                        <button class="btn btn-default btn-icon-text waves-effect"><i class="zmdi zmdi-phone"></i> Call</button>

                        <br>
                        <br>
                        <br>


                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-home"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-more-vert"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-arrow-forward"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-arrow-back"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-refresh"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-check"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-close"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-menu"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-check-all"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-trending-up"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn btn-default waves-effect"><i class="zmdi zmdi-phone"></i></button>

                        <br>
                        <br>

                        <button class="btn btn-primary waves-effect"><i class="zmdi zmdi-home"></i></button>
                        <button class="btn btn-info waves-effect"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-success waves-effect"><i class="zmdi zmdi-more-vert"></i></button>
                        <button class="btn btn-warning waves-effect"><i class="zmdi zmdi-arrow-forward"></i></button>
                        <button class="btn btn-danger waves-effect"><i class="zmdi zmdi-arrow-back"></i></button>
                        <button class="btn bg-teal waves-effect"><i class="zmdi zmdi-refresh"></i></button>
                        <button class="btn bg-orange waves-effect"><i class="zmdi zmdi-check"></i></button>
                        <button class="btn bg-cyan waves-effect"><i class="zmdi zmdi-close"></i></button>
                        <button class="btn bg-light-green waves-effect"><i class="zmdi zmdi-menu"></i></button>
                        <button class="btn bg-lime waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn bg-amber waves-effect"><i class="zmdi zmdi-check-all"></i></button>
                        <button class="btn bg-gray waves-effect"><i class="zmdi zmdi-trending-up"></i></button>
                        <button class="btn bg-light-blue waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn bg-deep-orange waves-effect"><i class="zmdi zmdi-phone"></i></button>

                        <br>
                        <br>
                        <br>

                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-home"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-more-vert"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-arrow-forward"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-arrow-back"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-refresh"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-check"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-close"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-menu"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-check-all"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-trending-up"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn btn-default btn-icon btn-circle waves-effect"><i class="zmdi zmdi-phone"></i></button>

                        <br>
                        <br>

                        <button class="btn btn-primary btn-icon btn-circle waves-effect"><i class="zmdi zmdi-home"></i></button>
                        <button class="btn btn-info btn-icon btn-circle waves-effect"><i class="zmdi zmdi-search"></i></button>
                        <button class="btn btn-success btn-icon btn-circle waves-effect"><i class="zmdi zmdi-more-vert"></i></button>
                        <button class="btn btn-warning btn-icon btn-circle waves-effect"><i class="zmdi zmdi-arrow-forward"></i></button>
                        <button class="btn btn-danger btn-icon btn-circle waves-effect"><i class="zmdi zmdi-arrow-back"></i></button>
                        <button class="btn bg-teal btn-icon btn-circle waves-effect"><i class="zmdi zmdi-refresh"></i></button>
                        <button class="btn bg-orange btn-icon btn-circle waves-effect"><i class="zmdi zmdi-check"></i></button>
                        <button class="btn bg-cyan btn-icon btn-circle waves-effect"><i class="zmdi zmdi-close"></i></button>
                        <button class="btn bg-light-green btn-icon btn-circle waves-effect"><i class="zmdi zmdi-menu"></i></button>
                        <button class="btn bg-lime btn-icon btn-circle waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn bg-amber btn-icon btn-circle waves-effect"><i class="zmdi zmdi-check-all"></i></button>
                        <button class="btn bg-gray btn-icon btn-circle waves-effect"><i class="zmdi zmdi-trending-up"></i></button>
                        <button class="btn bg-light-blue btn-icon btn-circle waves-effect"><i class="zmdi zmdi-apps"></i></button>
                        <button class="btn bg-deep-orange btn-icon btn-circle waves-effect"><i class="zmdi zmdi-phone"></i></button>


                    </div>
                </div>
            </div>


            <div class="page-header">
                <h1>Tables</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="page-header">
                <h1>Thumbnails</h1>
            </div>
            <img data-src="holder.js/200x200" class="img-thumbnail" alt="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera">


            <div class="page-header">
                <h1>Labels</h1>
            </div>
            <h1>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h1>
            <h2>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h2>
            <h3>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h3>
            <h4>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h4>
            <h5>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h5>
            <h6>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </h6>
            <p>
                <span class="label label-default">Default</span>
                <span class="label label-primary">Primary</span>
                <span class="label label-success">Success</span>
                <span class="label label-info">Info</span>
                <span class="label label-warning">Warning</span>
                <span class="label label-danger">Danger</span>
            </p>


            <div class="page-header">
                <h1>Badges</h1>
            </div>
            <p>
                <a href="#">Inbox <span class="badge">42</span></a>
            </p>
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
            </ul>


            <div class="page-header">
                <h1>Dropdown menus</h1>
            </div>
            <div class="dropdown theme-dropdown clearfix">
                <a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li class="active"><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>


            <div class="page-header">
                <h1>Navs</h1>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>


            <div class="page-header">
                <h1>Navbars</h1>
            </div>

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>

            <nav class="navbar navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project name</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>


            <div class="page-header">
                <h1>Alerts</h1>
            </div>
            <div class="alert alert-success" role="alert">
                <strong>Well done!</strong> You successfully read this important alert message.
            </div>
            <div class="alert alert-info" role="alert">
                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            </div>
            <div class="alert alert-warning" role="alert">
                <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>
            <div class="alert alert-danger" role="alert">
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
            </div>


            <div class="page-header">
                <h1>Progress bars</h1>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
            </div>


            <div class="page-header">
                <h1>List groups</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>


            <div class="page-header">
                <h1>Panels</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Panel title</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>


            <div class="page-header">
                <h1>Wells</h1>
            </div>
            <div class="well">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>


            <div class="page-header">
                <h1>Carousel</h1>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide">
                    </div>
                    <div class="item">
                        <img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide">
                    </div>
                    <div class="item">
                        <img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="dist/js/jquery-1.11.3.min.js"></script>
        <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="dist/js/bootstrap.min.js"></script>
        <script src="dist/js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="dist/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
