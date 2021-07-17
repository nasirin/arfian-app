<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<head>
    <meta charset="utf-8" />
    <title>Telkom Akses | Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/template/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="/template/" rel="stylesheet" />
    <link href="/template/assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css@family=open+sans_3a300italic,400italic,600italic,700italic,400,600,700,300.css" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="/template/assets/css/beyond.min.css" rel="stylesheet" />
    <link href="/template/assets/css/demo.min.css" rel="stylesheet" />
    <link href="/template/assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/template/assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <?= $this->include('components/alert') ?>
        <form action="/auth/login" method="post">
            <?= csrf_field() ?>
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input type="number" name="notelp" min="0" class="form-control" placeholder="Phone" required />
                </div>
                <div class="loginbox-textbox">
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>
                <div class="loginbox-submit">
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                </div>
            </div>
        </form>
        <div class="logobox">
            <div class="row text-center">
                <img src="/assets/logo.png" alt="" width="40">
                <span style="font-size: 20px;">Telkom Akses</span>
            </div>
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="/template/assets/js/jquery.min.js"></script>
    <script src="/template/assets/js/bootstrap.min.js"></script>
    <script src="/template/assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="/template/assets/js/beyond.js"></script>


</body>
<!--Body Ends-->

</html>