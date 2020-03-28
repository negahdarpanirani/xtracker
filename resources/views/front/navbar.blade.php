<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="utf-8">
  <title>صفحه اول</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->


  <!-- Bootstrap CSS File -->
   <!-- <link href="app.css" rel="stylesheet"> -->
   <!-- <link rel="stylesheet" type="text/css" href="app.css"/> -->

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">
<link href="lib/font/font.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body dir="rtl" >
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>ردیاب</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route('home')}}">خانه</a></li>
          <li><a href="#about"> ردیابی </a></li>
          <li><a href="{{route('admin')}}">مدیریت</a></li>
          <li><a href="{{route('account')}}">حسابداری</a></li>
          <li><a href="#portfolio">آمار</a></li>
          <li class="drop-down"><a href="#">پنل کاربری </a>
            <ul>

                 @auth
                 <li><form method="POST" action="{{route('logout')}}">
                  @csrf
                  <button type="submit" class="btn btn-success">خروج</button>
                  </form>
                  </li>
                  @else
                  <li><a href="{{route('register')}}">فرم ثبت نام</a></li>
                  <li><a href="{{route('login')}}">فرم ورود</a></li>
                 @endauth
                     
            </ul>
          </li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->