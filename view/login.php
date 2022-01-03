<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/lib/img/Logo.jpeg" type="img/jpg">

    <title>Presensi Online Desa</title>

    <!-- Bootstrap core CSS -->
    <link href="./lib/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./lib/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./lib/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./lib/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 14px;
            /* background-image: url(lib/img/banner.png);
            background-position-x: center; */
        }

        #utama {
            width: 300px;
            margin: 0 auto;
            margin-top: 0 auto;
        }

        .profile-img {
            /*width: 60%;*/
            height: 95px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        #judul {
            padding: 15px;
            text-align: center;
            color: #fff;
            font-size: 20px;
            background-color: #17a431;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            border-bottom: 3px solid #14872a;
        }

        #input {
            background-color: #b7e6c0;
            padding: 20px;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        input {
            padding: 10px;
            border: 0;
            background-color: #e0e7e7;
        }

        .lg {
            width: 240px;
        }

        .btn {
            background-color: #17a431;
            border-radius: 6px;
            color: #fff;
            width: 260px;
        }

        .btn:hover {
            background-color: #14872a;
            cursor: pointer;
        }

        .footer {
            text-align: center;
            color: black;
        }
    </style>
</head>

<body>
    <div id="utama">


        <div id="judul">
            <img class="profile-img" src="lib/img/logo.jpeg">
            Halaman Login
            <alt="">

                <center style="font-weight: bold; font-size: 18px;">Presensi Pegawai</center>

        </div>
        <div id="input">
            <form class="form-signin" method="post" action="model/proses.php">
                <?php
                if (isset($_GET['log'])) {
                    if ($_GET['log'] == 2) {
                        echo "<div class='alert alert-danger'><strong>Periksa kembali email & katasandi Anda!</strong></div>";
                    }
                }
                ?>
                <div style="margin-top:8px;">
                    <label for="inputEmail" class="sr-only" class="lg">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="lg" placeholder="Email address" required="" autofocus="">
                </div>
                <div style="margin-top:10px;">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="pwd" id="inputPassword" class="lg" placeholder="Password" required="">
                </div>
                <div style="margin-top:20px;">
                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login" class="btn" ;>
                </div>
            </form>
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./lib/ie10-viewport-bug-workaround.js"></script>
    <br> <br>
    <div class="footer">
        Copyright© 2021 KKN Desa Semitau Hulu
    </div>


</body>

</html>