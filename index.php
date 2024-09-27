<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>HOTEL | S H I R A Z</title>
    <link rel="stylesheet" href="Css/common.css">
    <style>
      .pop-faci:hover
      {
        border-top-color: var(--teal) !important;
        transform: scale(1.03);
        transition: all 0.3s;
      }

      .pop-room:hover
      {
        transform: translateY(-15px);
        transition: all 0.5s;
      }
    </style>
</head>
<body class="bg-light" dir="rtl">
  
  <?php require("Inc/header.php");?>

  <!-- Carousel -->
  <swiper-container class="mySwiper" pagination="true" pagination-clickable="false" space-between="30" effect="fade"
    navigation="false" loop="true" autoplay="true" delay="5000">
    <swiper-slide class="container-fluid px-lg-4 mt-4 shadow-sm">
      <img src="Image/new1.jpg" class="border Home-pic"/>
    </swiper-slide>
    <swiper-slide class="container-fluid px-lg-4 mt-4 shadow-sm">
      <img src="Image/new2.jpg" class="border Home-pic"/>
    </swiper-slide>
  </swiper-container>

  <!-- Check availability form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded-4 mt-3 border-top border-4">
        <h5 class="mb-3">بررسی تاریخ رزرو</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-size: 15px; font-weight: 500px;">از تاریخ</label>
              <input type="date" class="form-control shadow-none" style="font-size: 14px;">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-size: 15px; font-weight: 500px;">تا تاریخ</label>
              <input type="date" class="form-control shadow-none" style="font-size: 14px;">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-size: 15px; font-weight: 500px;">تعداد بزرگسال</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-size: 15px; font-weight: 500px;">تعداد کودکان</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow custom-bg">جستوجو</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Our rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font HotelName">Our - Rooms</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 my-3 pop-room">
        <div class="card border-0 shadow" style="max-width: 19rem; margin: auto;">
          <img src="Image/Rooms/1.jpg" class="card-img-top">
          <div class="card-body">
            <h5>اتاق ویژه تک نفره</h5>
            <h6 class="mb-4">هر شب  2.700.000 تومان</h6>
            <div class="features mb-3">
              <h6 class="mb-1">امکانات</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                دوتا اتاق
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک حمام
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک بالکن
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سه تا کاناپه راحتی
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">ویژگی ها</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                اینترنت
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                تلویزیون
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سرمایش و گرمایش
              </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">تعداد مهمانان</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۳ نفر بزرگسال
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۲ نفر کودک
              </span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">رتبه بندی</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-ovenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow custom-bg">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow me-3">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-7 my-3 pop-room">
        <div class="card border-0 shadow" style="max-width: 19rem; margin: auto;">
          <img src="Image/Rooms/2.jpg" class="card-img-top">
          <div class="card-body">
            <h5>اتاق ویژه تک نفره</h5>
            <h6 class="mb-4">هر شب  2.700.000 تومان</h6>
            <div class="features mb-3">
              <h6 class="mb-1">امکانات</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                دوتا اتاق
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک حمام
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک بالکن
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سه تا کاناپه راحتی
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">ویژگی ها</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                اینترنت
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                تلویزیون
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سرمایش و گرمایش
              </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">تعداد مهمانان</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۲ نفر بزرگسال
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۳ نفر کودک
              </span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">رتبه بندی</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-ovenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow custom-bg">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow me-3">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-7 my-3 pop-room">
        <div class="card border-0 shadow" style="max-width: 19rem; margin: auto;">
          <img src="Image/Rooms/3.jpg" class="card-img-top">
          <div class="card-body">
            <h5>اتاق ویژه تک نفره</h5>
            <h6 class="mb-4">هر شب  2.700.000 تومان</h6>
            <div class="features mb-3">
              <h6 class="mb-1">امکانات</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                دوتا اتاق
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک حمام
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک بالکن
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سه تا کاناپه راحتی
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">ویژگی ها</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                اینترنت
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                تلویزیون
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سرمایش و گرمایش
              </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">تعداد مهمانان</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۲ نفر بزرگسال
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۱ نفر کودک
              </span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">رتبه بندی</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-ovenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow custom-bg">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow me-3">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-7 my-3 pop-room">
        <div class="card border-0 shadow" style="max-width: 19rem; margin: auto;">
          <img src="Image/Rooms/4.jpg" class="card-img-top">
          <div class="card-body">
            <h5>اتاق ویژه تک نفره</h5>
            <h6 class="mb-4">هر شب  2.700.000 تومان</h6>
            <div class="features mb-3">
              <h6 class="mb-1">امکانات</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                دوتا اتاق
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک حمام
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                یک بالکن
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سه تا کاناپه راحتی
              </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">ویژگی ها</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                اینترنت
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                تلویزیون
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                سرمایش و گرمایش
              </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">تعداد مهمانان</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۲ نفر بزرگسال
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                ۰ نفر کودک
              </span>
            </div>
            <div class="rating mb-3">
              <h6 class="mb-1">رتبه بندی</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-ovenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow custom-bg">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow me-3">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-3">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-Bold shadow-none">سایر اتاق ها >>></a>
      </div>
    </div>
  </div>

  <!-- Our facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font HotelName">Our - Facilities</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="col-lg-2 col-md-2 text-center rounded-4 shadow py-4 my-3 border-top border-4 border-dark pop-faci">
        <img src="Image/facilities/wifi.png" width="50px">
        <h5 class="mt-4">اینترنت</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center rounded-4 shadow py-4 my-3 border-top border-4 border-dark pop-faci">
        <img src="Image/facilities/link.png" width="50px">
        <h5 class="mt-4">لینک</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center rounded-4 shadow py-4 my-3 border-top border-4 border-dark pop-faci">
        <img src="Image/facilities/bluetooth.png" width="50px">
        <h5 class="mt-4">بلوتوث</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center rounded-4 shadow py-4 my-3 border-top border-4 border-dark pop-faci">
        <img src="Image/facilities/rate.png" width="50px">
        <h5 class="mt-4">پنج ستاره</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center rounded-4 shadow py-4 my-3 border-top border-4 border-dark pop-faci">
        <img src="Image/facilities/shield.png" width="50px">
        <h5 class="mt-4">امنیت</h5>
      </div>
      <div class="col-lg-12 text-center mt-3">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-Bold shadow-none">سایر امکانات >>></a>
      </div>
    </div>
  </div>

  <!-- Our testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font HotelName">Our - Testimonials</h2>
  <div class="container mt-5">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide bg-white p-4 rounded-4 border-madrak mb-5">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Image/facilities/rate.png" width="20px">
            <h6 class="m-0 mt-2 me-2">کاربر شماره ۱ </h6>
          </div>
          <p class="p-0">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.Qui, voluptas corporis porro quidem culpa nihil libero ex optio iste voluptatem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide bg-white p-4 rounded-4 border-madrak mb-5">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Image/facilities/rate.png" width="30px">
            <h6 class="m-0 mt-2 me-2">کاربر شماره ۲ </h6>
          </div>
          <p class="p-0">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Qui, voluptas corporis porro quidem culpa nihil libero ex optio iste voluptatem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide swiper-slide bg-white p-4 rounded-4 border-madrak mb-5">
          <div class="profile d-flex align-items-center mb-3">
            <img src="Image/facilities/rate.png" width="30px">
            <h6 class="m-0 mt-2 me-2">کاربر شماره ۳ </h6>
          </div>
          <p class="p-0">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Qui, voluptas corporis porro quidem culpa nihil libero ex optio iste voluptatem.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Reach us -->
  <h2 class="mt-4 pt-4 mb-4 text-center fw-bold h-font HotelName">Reach - Us</h2>
  <div class="container mt-4 mb-5">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded-4 border-top border-4 border-dark">
        <iframe class="w-100 rounded-4" height="340px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221932.78312517962!2d52.69658373817206!3d29.641462957995635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fb20d0c8c85f2e3%3A0x6d0c5b8aef6b4cf6!2z2LTbjNix2KfYstiMINin2LPYqtin2YYg2YHYp9ix2LPYjCDYp9uM2LHYp9mG!5e0!3m2!1sfa!2s!4v1724764145608!5m2!1sfa!2s"loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white rounded-4 p-4 mb-2 border-top border-4 border-dark">
          <h5>تماس با ما :</h5>
          <a href="tel : +989103168371" class="d-inline-block mb-2 mt-1 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +98 910-316-8371
          </a>
          <br>
          <a href="tel : +989388322425" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +98 938-832-2425
          </a>
        </div>
        <div class="bg-white rounded-4 p-4 mb-2 border-top border-4 border-dark">
          <h5>ما را دنبال کنید :</h5>
          <a href="#" class="d-inline-block mt-1">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
          <a href="#" class="d-inline-block me-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a>
          <a href="#" class="d-inline-block me-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a>
        </div>
        <div class="bg-white rounded-4 p-4 mb-2 border-top border-4 border-dark">
          <h5>پشتیبانی هتل :</h5>
          <a href="#" class="d-inline-block mb-2">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-whatsapp me-1"></i> +98 938-832-2425
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php require("Inc/footer.php");?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        300: {
          slidesPerView: 1,
        },
        480: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      loop: true,
      delay: 4000,
      autoplay: true,
    });
  </script>
</body>
</html>