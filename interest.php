<html>
<head>
    <meta charset="utf-8">
    <title>Interests</title>
    <link rel="shortcut icon" href="image/icon-index.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

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
        .bg {
            background-image: url(image/australia-workshop-banner.png);
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 {
            color: brown;
            text-align: center;
            font-family: "salamat";
            font-size: 40px;
        }

        p {
            font-family:"salamat";
            text-align: center;
            font-size: 30px;
        }

        .button {
            display: inline-block;
            background-color: #ffa31a;
            border-radius: 4px;
            border: none;
            color: black;
            padding: 30px 64px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: "salamat";
            font-size: 20px;
            margin: 3px;
            cursor: pointer;
            transition: all 0.5s;
            width: 16%;
        }

        .button:hover {
            background-color:#c2c2a3;
        }
        .button:active {
            background-color: #3e8e41;
            transform: translateY(4px);
        }
        .button2 {background-color:#ff3377;}
        .button3 {background-color:#d633ff;}
        .button4 {background-color:#29a3a3 ;}
        .button5 {background-color:#33cc33 ;}
        .button6 {background-color:#ff3300 ;}
    </style>
</head>
<body style="background-color: #f2f2f2">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="font-family: ad">Tehran Fun Tour</a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="font-family: aa;font-size: 30px;height: 45px">
            <li><a href="admin.php"><span class="glyphicon"></span>یافتن تفریح</a></li>
            <li class="dropdown" dir="rtl">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">تنظیمات<span class="caret"></span></a>
                <ul class="dropdown-menu" style="font-size: large">
                    <li><a href="changeEmail.php">تغییر ایمیل</a></li>
                    <li><a href="changePassword.php">تغییر رمز عبور</a></li>
                </ul>
            </li>
            <li><a href="exit.php" dir="rtl">خروج</a></li>
            <p class="navbar-text" dir="rtl" style="margin-right: 20px">
                <?php
            //    echo
              //      " نام کاربری شما: ".$_SESSION['username'];
                ?>
            </p>
        </ul>
    </div>
</nav>
<h1 style="margin-top: 75px">:مکان های مورد علاقه خود را انتخاب کنید </h1>
<p>.با وارد کردن مکان های مورد علاقه خود از اضافه شدن مکان های جدید،تخفیف ها و... مطلع شوید</p>

<div class="bg"></div>
<div class="row center-block" style="margin-top: 25px">
    <button class="button">رستوران و کافی شاپ</button>
    <button class="button button2">شهربازی</button>
    <button class="button button3">مرکز خرید</button>
    <button class="button button4">مجموعه ورزشی</button>
    <button class="button button5">پارک و فضای آزاد</button>
    <button class="button button6">سینما،کنسرت و تئاتر</button>
</div>

</body>
</html>
