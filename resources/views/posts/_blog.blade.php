<section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">بلاگ</h1>
            <h2 class="mb-4">بلاگ من</h2>
            <p>«امروز به‌خاطر نمی‌آورم که دقیقأ چه‌چیز مرا بدین کار برانگیخت، اما هرچه بود، ضبط کلماتی را که «مورد استعمال عوام» بود کم و بیش از همان تاریخ آغاز کردم، و البته بی‌هیچ ضابطه‌ای در کار و بدون دراختیار داشتن ِهیچ‌گونه معیار و محکی برای تشخیص. اما نفس عمل «یادداشت‌کردن» عادت شد.»
              <br>
              احمد شاملو
            </p>
          </div>
        </div>
            <!-- START SINGLE POST -->
            @if ($posts->count())
            <x-posts-grid :posts="$posts" />
            <!-- {{ $posts->links() }} -->
        @else
            <p class="text-center">متاسفانه هیچ پستی وجود ندارد، لطفاً از قسمت جستجو سایت
                استفاده کنید!</p>
        @endif
    <!-- END SINGLE POST -->
        </div>
    </section>