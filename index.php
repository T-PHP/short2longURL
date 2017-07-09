<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Short2LongURL</title>
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
        font-weight: normal;
        color: #ffffff
    }

</style>
<body>

<div class="container-fluid theme-container" role="main">
    <h1 class="text-center text-uppercase">Short 2 Long URL</h1>
    <div class="col-md-6 col-md-offset-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="shortURL">Paste short URL</label>
                <input type="text" class="form-control input-lg" id="shortURL" name="shortURL" placeholder="http://"
                       required>
            </div>
            <p class="text-center">
                <button type="submit" class="btn btn-lg btn-warning text-uppercase">View Long URL</button>
            </p>
        </form>
        <?php
        if (isset($_POST['shortURL']) AND !empty($_POST['shortURL']) AND filter_var($_POST['shortURL'], FILTER_VALIDATE_URL)):
            //Encode URL
            $urlEncode = urlencode($_POST['shortURL']);
            //Decode URL
            $urlDecode = htmlspecialchars(urldecode($urlEncode), ENT_QUOTES);
            //Get Headers
            $getHeaders = get_headers($urlDecode, 1);
            //echo '<pre>'; var_dump($getHeaders); echo '</pre>';
            if(is_array($getHeaders['Location'])):
                $location = current($getHeaders['Location']);
            else:
                $location = $getHeaders['Location'];
            endif;

            //If Redirect 301, 302 or 303 : Display URL
            if (strpos($getHeaders[0], '301') || strpos($getHeaders[0], '302') || strpos($getHeaders[0], '303') !== false):
                echo '<p class="alert alert-success text-center">';
                echo '<span class="glyphicon glyphicon-check" aria-hidden="true"></span> ';
                echo '<a href="' . $location . '" target="_blank">' . $location . '</a>';
                echo '</p>';
            else:
                echo '<p class="alert alert-danger text-center">';
                echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> ';
                echo 'This url is not redirected';
                echo '</p>';
            endif;
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
        </div>
    </div>
</div>

</body>
</html>