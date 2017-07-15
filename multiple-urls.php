<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Short to Long Multiple URLs - Short2LongURL</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .theme-container {
        background: url('img/bg.jpg') no-repeat center center;
        background-size: cover;
        padding-top: 200px;
        padding-bottom: 200px;
        margin-bottom: 10px;
    }

    h1, label {
        font-weight: bold;
        color: #ffffff
    }

    .bg-white {
        background: #ffffff;
    }
    /* By Clean Blog https://startbootstrap.com/template-overviews/clean-blog/ */
    .navbar-custom {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 3;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }
    .navbar-custom .navbar-brand {
        font-weight: 800;
    }
    .navbar-custom .navbar-header .navbar-toggle {
        color: #777777;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 12px;
    }
    .navbar-custom .nav li a {
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 1px;
    }
    @media only screen and (min-width: 768px) {
        .navbar-custom {
            background: transparent;
            border-bottom: 1px solid transparent;
        }
        .navbar-custom .navbar-brand {
            color: white;
            padding: 20px;
        }
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-brand:focus {
            color: rgba(255, 255, 255, 0.8);
        }
        .navbar-custom .nav li a {
            color: white;
            padding: 20px;
        }
        .navbar-custom .nav li a:hover,
        .navbar-custom .nav li a:focus {
            color: rgba(255, 255, 255, 0.8);
        }
        .navbar-custom .nav li ul.dropdown-menu a {
            color: #333333;
        }
        .navbar-custom .nav li ul.dropdown-menu a:hover,
        .navbar-custom .nav li ul.dropdown-menu a:focus {
            color: #0085A1;
        }
    }
    @media only screen and (min-width: 1170px) {
        .navbar-custom {
            -webkit-transition: background-color 0.3s;
            -moz-transition: background-color 0.3s;
            transition: background-color 0.3s;
            /* Force Hardware Acceleration in WebKit */
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .navbar-custom.is-fixed {
            /* when the user scrolls down, we hide the header right above the viewport */
            position: fixed;
            top: -61px;
            background-color: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid #f2f2f2;
            -webkit-transition: -webkit-transform 0.3s;
            -moz-transition: -moz-transform 0.3s;
            transition: transform 0.3s;
        }
        .navbar-custom.is-fixed .navbar-brand {
            color: #333333;
        }
        .navbar-custom.is-fixed .navbar-brand:hover,
        .navbar-custom.is-fixed .navbar-brand:focus {
            color: #0085A1;
        }
        .navbar-custom.is-fixed .nav li a {
            color: #333333;
        }
        .navbar-custom.is-fixed .nav li a:hover,
        .navbar-custom.is-fixed .nav li a:focus {
            color: #0085A1;
        }
        .navbar-custom.is-visible {
            /* if the user changes the scrolling direction, we show the header */
            -webkit-transform: translate3d(0, 100%, 0);
            -moz-transform: translate3d(0, 100%, 0);
            -ms-transform: translate3d(0, 100%, 0);
            -o-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }
    }
        /* End By Clean Blog https://startbootstrap.com/template-overviews/clean-blog/ */
</style>
<body>

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">Short 2 Long URL</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Simple URL</a>
                </li>
                <li>
                    <a href="multiple-urls.php">Multiple URLs</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<div class="container-fluid theme-container" role="main">
    <h1 class="text-center text-uppercase">Short 2 Long URL</h1>
    <div class="col-md-6 col-md-offset-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="shortURL">Paste short URLs (one per line)</label>
                <textarea id="shortURL" name="shortURL" class="form-control  input-lg" rows="10" required></textarea>
            </div>
            <p class="text-center">
                <button type="submit" class="btn btn-lg btn-warning text-uppercase">View Long URLs</button>
            </p>
        </form>
        <?php
        if (isset($_POST['shortURL']) AND !empty($_POST['shortURL'])):
            echo '<div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered bg-white">
                            <thead>
                                <th>Short URL</th>
                                <th>Long URL</th>
                            </thead> <tbody>';


            foreach(explode("\n", $_POST['shortURL']) as $line) {
                //Encode URL
                $urlEncode = urlencode($line);
                //Decode URL
                $urlDecode = htmlspecialchars(urldecode($urlEncode), ENT_QUOTES);
                //Delete chars first and end Url
                $urlDecode = trim($urlDecode);
                //Get Headers
                $getHeaders = get_headers($urlDecode, 1);

                if(is_array($getHeaders['Location'])):
                    $location = current($getHeaders['Location']);
                else:
                    $location = $getHeaders['Location'];
                endif;

                echo '<tr>';
                    //If Redirect 301, 302 or 303 : Display URL
                    if (strpos($getHeaders[0], '301') || strpos($getHeaders[0], '302') || strpos($getHeaders[0], '303') !== false):
                        echo '<td>'.$urlDecode.'</td>';
                        echo '<td><span class="glyphicon glyphicon-check" aria-hidden="true"></span> <a href="' . $location . '" target="_blank">' . $location . '</a></td>';
                    else:
                        echo '<td>'.$urlDecode.'</td>';
                        echo '<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> This url is not redirected</td>';
                    endif;
                echo '</tr>';
            };
            echo ' </tbody> </table> </div>';

        endif;
        ?>
    </div>
</div> <!-- /container -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <p class="text-center"><strong>Supported Websites :</strong>
            <ul class="list-inline text-center">
                <li><a href="https://goo.gl" target="_blank">goo.gl</a></li>
                <li><a href="https://bit.ly" target="_blank">bit.ly</a></li>
                <li><a href="https://tiny.cc/" target="_blank">tiny.cc</a></li>
                <li><a href="http://ow.ly" target="_blank">ow.ly</a></li>
                <li><a href="https://u.nu" target="_blank">u.nu</a></li>
                <li><a href="https://tinyurl.com" target="_blank">tinyurl.com</a></li>
                <li>and 200+ more...</li>
            </ul>
            </p>
            <p class="text-right text-italic">by <a href="">short2longURL v0.2</a></p>
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>