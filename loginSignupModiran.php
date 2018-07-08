<html>
<head>
    <meta charset="utf-8">
    <title>Tehran Fun Tour</title>
    <link rel="shortcut icon" href="image/icon-index.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/bootstrap.js"></script>
    <style>
        @font-face {
            font-family: "aa";
            src: url("font/AdobeArabic.otf");
        }
        @font-face {
            font-family: "b";
            src: url("font/b.ttf");
        }
        @font-face {
            font-family: "ad";
            src: url("font/ArchitectsDaughter.ttf");
        }
        @font-face {
            font-family: "zangar";
            src: url("font/zangar.ttf");
        }
        @font-face {
            font-family: "salamat";
            src: url("font/Salamat.ttf");
        }
        .card {
            margin: 0 100px 100px 25px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.5s;
            background-color: white;
            font-family:aa;
            font-size:30px;
            color: #663399;
        }
        .card:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .mybutton {
            font-size: 25px;
            border-radius: 10px;
            width: 60%;
            transition: 0.3s;
            background-color: #9932CC;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .mybutton:hover {
            color: white;
            background-color: #DA70D6;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

    </style>
</head>
<body style="background-color: #f2f2f2">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="font-family: ad">Tehran Fun Tour</a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="font-family: aa;font-size: 30px;height: 45px;">
            <li><a href=""><span class="glyphicon"></span>کاربر مهمان</a></li>
            <li><a href="index.php"><span class="glyphicon"></span>ثبت نام-ورود کاربران</a></li>
        </ul>
    </div>
</nav>
<div class="row"  style="margin-top: 145px">
    <div class="col-md-6">
        <img class="img center-block" src="image/password.png">
    </div>
    <div class="col-md-6" dir="rtl">
        <div class="card container-fluid">
            <p style="font-family:b; font-size: 35px">
                ورود مدیران مراکز
                <br>
            </p>
            <center>
                <form action="action-login-modiran.php" method="post">
                    <input type="text" placeholder="نام کاربری" name="user-name" style="width:70%">
                    <br>
                    <input type="password" placeholder="رمز عبور" name="password" style="width:70%">
                    <br><br>
                    <button type="submit" class="btn mybutton">تایید</button>
                </form>
            </center>
            <a href="index.php" target="_blank" style="font-size:30px;color: #663399">
                ورود به عنوان کاربر
            </a>
            <br>
        </div>
    </div>
</div>
<div class="row" dir="rtl" style="margin-left: 75px">
    <div class="card container-fluid">
        <p style="font-family:b; font-size: 35px">
            ثبت نام مدیران مراکز
            <br>
        </p>
            <form action="" method="post">
                نام و نام خانوادگی:
                <br>
                <input type="text" placeholder="نام و نام خانوادگی خود را وارد کنید" name="name" class="center-block" style="width:70%">
                نام کاربری:
                <br>
                <input type="text" placeholder="نام کاربری خود را وارد کنید" name="user-name" class="center-block" style="width:70%">
                رمز عبور:
                <br>
                <input type="password" placeholder="رمز عبور خود را وارد کنید" name="password" class="center-block" style="width:70%">
                شماره تماس:
                <br>
                <input type="number" placeholder="شماره تماس خود را وارد کنید" name="phone-number" class="center-block" style="width:70%">
                ایمیل:
                <br>
                <input type="email" placeholder="ایمیل خود را وارد کنید" name="email" class="center-block" style="width:70%">
                <br>
            <button type="submit" class="btn mybutton center-block">تایید</button>
            </form>
    </div>
</div>
</body>
</html>
