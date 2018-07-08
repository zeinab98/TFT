<?php
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
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
        .card {
            margin: 100px 25px 55px 25px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.5s;
            background-color: #696969;
            border-radius: 25px;
            opacity: 0.9;
            font-family:aa;
            font-size:30px;
            color: #696969;
        }
        .card:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .mybutton {
            font-size: 25px;
            border-radius: 10px;
            width: 60%;
            transition: 0.3s;
            background-color: #D8BFD8;
            color: #696969;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
        .mybutton:hover {
            color: white;
            background-color: #FFA07A;
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
        body{
            background-image: url(image/admin.jpg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body style="background-color: #f2f2f2">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="font-family: ad">Tehran Fun Tour</a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="font-family: aa;font-size: 30px;height: 45px">
            <li><a href="interest.php"><span class="glyphicon"></span>علایق</a></li>
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
<div class="row">
    <div class="col-md-6" dir="rtl">
        <div class="card container-fluid">
            <p style="font-family:b; font-size: 40px; color: #f2f2f2; margin-bottom: 50px">
                جستجو بر اساس نوع مکان تفریحی
                <br>
            </p>
            <p style="color: #f2f2f2; margin-bottom: 50px">
                <?php
               if($_SESSION['category']!='empty')
                   echo  $_SESSION['category'];
               $_SESSION['category']='empty';
                ?>
            </p>
            <p style="color: #f2f2f2; margin-bottom: 50px">
            نوع مکان تفریحی مورد نظر خود را انتخاب کنید تا تمامی مکان های
                تفریحی آن دسته برای شما نمایش داده شوند.
            </p>
            <form action="action-admin-findByCategory.php" method="post">
                <p style="color: #f2f2f2">
                    <input type="radio" name="category" value="restaurant" style="margin-right: 50px"> رستوران و کافی شاپ
                    <input type="radio" name="category" value="farhangi" style="margin-right: 15px"> سینما و تئاتر و کنسرت
                    <input type="radio" name="category" value="fan-fair" style="margin-right: 15px"> شهربازی
                        <br>
                    <input type="radio" name="category" value="shop-center" style="margin-right: 50px"> مرکز خرید
                    <input type="radio" name="category" value="gym" style="margin-right: 15px"> مجموعه ی ورزشی
                    <input type="radio" name="category" value="park" style="margin-right: 15px">پارک و فضای آزاد
                    <input type="radio" name="category" value="other" style="margin-right: 15px"> سایر
                        <button type="submit" class="btn mybutton center-block" style="margin-top: 50px; margin-bottom: 50px">تایید</button>
                </p>
            </form>
        </div>
    </div>
    <div class="col-md-6" dir="rtl">
        <div class="card container-fluid">
            <p style="font-family:b; font-size:40px; color: #f2f2f2">
                یافتن هوشمند تفریح
                <br>
            </p>
            <p style="font-size:30px;color: #f2f2f2">
<?php
if(isset($_SESSION['calDay']) && $_SESSION['calDay']!='empty')
{
    echo
        " اطلاعات وارد شده: ".' تاریخ:'.$_SESSION['calDay']." روز هفته:".$_SESSION['day']." زمان:".$_SESSION['time']." بودجه:".$_SESSION['budget']
    ;
    $_SESSION['calDay']='empty';

    switch ($_SESSION['day']){
        case "saturday" :

            echo " مراکز پیشنهادی<br />
          1- پردیس سینمایی کورش <br />
           آدرس : منطقه 17 شهرداری.بزرگراه آیت الله سعیدی <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- پارک 22 بهمن <br />
           آدرس : خ قزوین.سرپل امام زاده معصوم <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;

        case "sunday" :
            echo " مراکز پیشنهادی<br />
          1- مرکز خرید تندیس <br />
           آدرس : میدان تجریش، ابتدای خیابان جعفری، مرکز خرید تندیس <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- هالی کافه <br />
           آدرس : خیابان استاد نجات الهی بین سمیه و طالقانی کوچه بیمه <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";;
            break;

        case "monday" :
            echo " مراکز پیشنهادی<br />
          1- پارک ارم قلعه سحر آمیز <br />
           آدرس : خ دربند.خ اسد الهی <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- مجتمع تجاری کوروش <br />
           آدرس : بزرگراه شهید ستاری، تقاطع خیابان پیامبر مرکزی، کورش مال <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;

        case "tuesday" :
            echo " مراکز پیشنهادی<br />
          1- سینما آرش <br />
           آدرس : چهارراه مولوی – روبروی بیمارستان اشرفی اصفهانی <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- کافه برد گیم <br />
           آدرس : خیابان انقلاب - خیابان فخررازی - خیابان شهدای ژاندارمری شرقی - پلاک ۶۸ <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;

        case "wednesday" :
            echo " مراکز پیشنهادی<br />
          1- رستوران مادر <br />
           آدرس : م بهمن.روبروی فرهنگسرای بهمن <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- دپارتمان سنتر روشا <br />
           آدرس : خیابان نیاوران، تقاطع عمار و فرمانیه۶۸ <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;

        case "thursday" :
            echo " مراکز پیشنهادی<br />
          1- كافه بلين <br />
           آدرس : کریمخان خیابان ایرانشهر پایین تر از پارک هنرمندان کوچه دهقانی <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- سینما آفریقا <br />
           میدان ولی عصر – خیابان ولی عصر – روبروی بانک سپه <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;

        case "friday" :
            echo " مراکز پیشنهادی<br />
          1- بوستان ولایت <br />
           آدرس : منطقه 19 شهرداری.انتهای اتوبان نواب <br />
           شماره تماس :" .$n = rand (100000, 999999);
            echo "<br />
          2- مرکز خرید دنیای نور <br />
           بزرگراه رسالت نبش خیابان کُرد مجتمع دنیای نور <br />
           شماره تماس :" .$n = rand (100000, 999999);"<br />";
            break;
    }
}
?>
            </p>

                <form action="action-admin-findByDay.php" method="post">
                    <p style="color: #f2f2f2">
تاریخ مورد نظر خود را انتخاب کنید:
                    <br>
                    </p>
                    <input type="date" name="calDay" class="center-block" style="width:70%">
                    <p style="color: #f2f2f2">
                        روز مورد نظر خود را انتخاب کنید:
                        <br>
                    </p>
                    <center>
                    <p style="color: #f2f2f2">
                    <input type="radio" name="day" value="saturday" checked> شنبه
                    <input type="radio" name="day" value="sunday"> یک شنبه
                    <input type="radio" name="day" value="monday"> دوشنبه
                    <input type="radio" name="day" value="tuesday"> سه شنبه
                    <input type="radio" name="day" value="wednesday"> چهارشنبه
                    <input type="radio" name="day" value="thursday"> پنج شنبه
                    <input type="radio" name="day" value="friday"> جمعه<br>
                    </p>
                    </center>
                    <p style="color: #f2f2f2">
                        زمان (ساعت) مورد نظر خود را انتخاب کنید:
                    <br>
                    </p>
                    <input type="time" name="time" class="center-block" style="width:70%">
                    <p style="color: #f2f2f2">
                    بودجه ی مالی خود را به ریال وارد کنید:
                        <br>
                    </p>
                    <input type="number" placeholder="بودجه ی خود را وارد کنید" name="budget" class="center-block" style="width:70%">
                    <br>
                    <button type="submit" class="btn mybutton center-block">تایید</button>
                </form>
            <a href="interest.php" target="_blank" style="font-size:30px;color: #f2f2f2">
             تنظیم علایق
            </a>
        </div>
    </div>
</div>
</body>
</html>
