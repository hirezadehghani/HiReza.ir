<!DOCTYPE html>
<html lang="en">

<head>
  <title>وب سایت شخصی رضا دهقانی</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/animate.css">

  <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/assets/css/magnific-popup.css">

  <link rel="stylesheet" href="/assets/css/aos.css">

  <link rel="stylesheet" href="/assets/css/ionicons.min.css">

  <link rel="stylesheet" href="/assets/css/flaticon.css">
  <link rel="stylesheet" href="/assets/css/icomoon.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/app.css">


  {{-- CAPTCHA CODE --}}
  {!! ArCaptcha::getScript() !!}
  {{-- CAPTCHA CODE --}}

  {{-- MU CHAT SCRIPT --}}
  <script
    defer
    id="clvdhhtq80v3uoe01holljezv"
    data-name="muchat-chat-bubble"
    src="https://cdn.mu.chat/widget/chat-bubble/chat-bubble.js"
  >
  </script>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <!-- HiREZA logo -->
      <a href="/">
        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1100 400" width="128" height="47">
          <title>HiReza LOGO</title>
          <defs>
            <image width="346" height="266" id="img1" href="data:image/png;base64,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" />
            <image width="789" height="286" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxUAAAEeCAMAAADLm8jSAAAAAXNSR0IB2cksfwAAAwBQTFRFAAAA////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////Bz0LCAAAAQB0Uk5TACtzB1//DxGnGM3WzBDLyskOyMcNxsUMxMPO3x8S3h7dHdwc2xvaGtnYGQSqTgGoZNNZAwbgaeNuCeTpeG/ufufx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" />
          </defs>
          <style>
          </style>
          <g id="BACKGROUND">
          </g>
          <use id="OBJECTS" href="#img1" x="725" y="65" />
          <use id="های رضا" href="#img2" x="53" y="47" />
        </svg>
      </a>
      <!-- HiREZA logo -->
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> منو
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="{{URL::to('/') . '/#home-section'}}" class="nav-link"><span>صفحه اصلی</span></a></li>
          <li class="nav-item"><a href="/#about-section" class="nav-link"><span>درباره من</span></a></li>
          <li class="nav-item"><a href="/#resume-section" class="nav-link"><span>رزومه من</span></a></li>
          <li class="nav-item"><a href="/#skills-section" class="nav-link"><span>مهارت ها</span></a></li>
          <li class="nav-item"><a href="/#services-section" class="nav-link"><span>خدمات</span></a></li>
          <li class="nav-item"><a href="/#projects-section" class="nav-link"><span>پروژه ها</span></a></li>
          <li class="nav-item"><a href="/#blog-section" class="nav-link"><span>بلاگ</span></a></li>
          <li class="nav-item"><a href="/#contact-section" class="nav-link"><span>تماس با من</span></a></li>
          <!-- <li class="nav-item"><a href="/posts/bug-report" class="nav-link"><span></span>گزارش باگ</a></li> -->
        </ul>
      </div>
    </div>
  </nav>

  {{ $slot }}

  <footer class="ftco-footer ftco-section">
    <x-flash />
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">من کی هستم؟</h2>
            <p>داستان از یک hello world! ساده شروع شد، وقتی که برای اولین بار یک برنامه ساده به زبان QBasic رو به کمک کتاب برنامه نویسی به زبان کیوبیسیک اجرا کردم.
              اون لحظه احساس وصف نشدنی ای داشتم؛ فکر میکردم مثل کریستف کلمب به یک قاره ناشناخته پا گذاشتم!
              <a href="https://hireza.ir/posts/مسیر-رضا-دهقانی">(ادامه)</a>
            </p>
            <ul class="ftco-footer-social list-unstyled float-md-right float-right mt-5">
              <li class="ftco-animate"><a href="https://github.com/hirezadehghani" target="_blank"><span class="icon-github"></span></a></li>
              <li class="ftco-animate"><a href="https://stackoverflow.com/users/15791696/hirezadehghani" target="_blank"><span class="icon-stack-overflow"></span></a></li>
              <li class="ftco-animate"><a href="https://www.linkedin.com/in/hirezadehghani/" target="_blank"><span class="icon-linkedin"></span></a></li>
              <li class="ftco-animate"><a href="https://t.me/HiRezaDehghani" target="_blank"><span class="icon-telegram"></span></a></li>
              <li class="ftco-animate"><a href="https://hirezadehghani.medium.com/" target="_blank"><span class="icon-medium"></span></a></li>
              {{-- <li class="ftco-animate"><a href="https://dribbble.com/iamrexa" target="_blank"><span class="icon-dribbble"></span></a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">لینک ها</h2>
            <ul class="list-unstyled">
              <li><a href="https://hireza.ir/#home-section"><span class="icon-long-arrow-left ml-2"></span>خانه</a></li>
              <li><a href="https://hireza.ir/#about-section"><span class="icon-long-arrow-left ml-2"></span>من کی هستم؟</a></li>
              <li><a href="https://hireza.ir/#services-section"><span class="icon-long-arrow-left ml-2"></span>خدمات من</a></li>
              <li><a href="https://hireza.ir/#projects-section"><span class="icon-long-arrow-left ml-2"></span>نمونه پروژه ها</a></li>
              <li><a href="https://hireza.ir/#contact-section"><span class="icon-long-arrow-left ml-2"></span>تماس با من</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">خدمات</h2>
            <ul class="list-unstyled">
              <li><a href="https://hireza.ir/#services-section"><span class="icon-long-arrow-left ml-2"></span>مهندسی پروژه نرم‌افزاری</a></li>
              <li><a href="https://hireza.ir/#services-section"><span class="icon-long-arrow-left ml-2"></span>توسعه وب</a></li>
              <li><a href="https://hireza.ir/#services-section"><span class="icon-long-arrow-left ml-2"></span>توسعه وب اپلیکیشن</a></li>
              <li><a href="https://hireza.ir/#services-section"><span class="icon-long-arrow-left ml-2"></span>توسعه ای‌پی‌آی (API)</a></li>
            </ul>
            </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">سوالی دارید؟</h2>
            <div class="block-23 mb-3">
              <ul>
              {{-- address phpne --}}
                <li><a href="mailto:&#x68;&#x65;&#x6C;&#x6C;&#x6F;&#x2E;&#x64;&#x65;&#x68;&#x67;&#x68;&#x61;&#x6E;&#x69;&#x40;&#x67;&#x6D;&#x61;&#x69;&#x6C;&#x2E;&#x63;&#x6F;&#x6D;"><span class="icon icon-envelope"></span>&#x68;&#x65;&#x6C;&#x6C;&#x6F;&#x2E;&#x64;&#x65;&#x68;&#x67;&#x68;&#x61;&#x6E;&#x69;&#x40;&#x67;&#x6D;&#x61;&#x69;&#x6C;&#x2E;&#x63;&#x6F;&#x6D;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p>کپی رایت &copy; کلیه حقوق مادی و معنوی این سایت متعلق به رضا دهقانی می باشد.</p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

          <div class="footer">
            <p class="ml-3">توسعه داده شده با عشق با استفاده از لاراول توسط خودم! (<a href="/posts/hireza_development_details">اطلاعات بیشتر</a>)
              <!-- برای طراحی ظاهر به دلیل تمایل به استفاده از فریم ورک برای فرانت و کمبود زمان برای یادگیری ترجیح دادم موقتا از قالب Colorlib استفاده کنم. -->
            </p>
            <img src="/images/Laravel-9_hireza_ir.svg" alt="laravel9" width="100px" height="100px">
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.easing.1.3.js"></script>
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/jquery.animateNumber.min.js"></script>
  <script src="/assets/js/scrollax.min.js"></script>
  <script src="{{secure_asset('/assets/js/alpine.min.js')}}" defer></script>

  <script src="/assets/js/main.js"></script>

  @stack('footer')

</body>

</html>