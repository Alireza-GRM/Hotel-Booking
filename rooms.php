<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>HOTEL - ROOMS</title>
    <link rel="stylesheet" href="Css/common.css">
    <style>
      .card-img-zoom {
        overflow: hidden;
      }

      .card-img-zoom img {
        transition: transform 0.9s ease;
      }

      .card-img-zoom:hover img {
        transform: scale(1.2);
      }
    </style>
</head>
<body class="bg-light" dir="rtl">
  
  <?php require("Inc/header.php");?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center HotelName fs-2">Our - Rooms</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h5 class="mt-2 me-2">فیلتر جستوجو</h5>
            <button class="navbar-toggler" style="width: 35px; height: 35px; position: absolute; left: 20px;" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="width: 20px; margin-right: -5px; margin-top: -2px;"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
              <div class="bg-light p-3 rounded mb-3 mt-2" style="border: 1px solid #e6e6e6;">
                <h6 class="mb-3" style="font-size: 18px;">بررسی موجودی اتاق ها</h6>
                <label class="form-label me-2" >از تاریخ :</label>
                <input type="date" class="form-control shadow-none mb-3 me-2">
                <label class="form-label me-2" >تا تاریخ :</label>
                <input type="date" class="form-control shadow-none me-2">
              </div>
              <div class="bg-light p-3 rounded mb-3" style="border: 1px solid #e6e6e6;">
                <h6 class="mb-3" style="font-size: 18px;">امکانات موجود در اتاق</h6>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-2">
                  <label class="form-check-label me-1" style="font-size: 15px;" for="f1">امکانات یک</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-2">
                  <label class="form-check-label me-1" style="font-size: 15px;" for="f2">امکانات دو</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-2">
                  <label class="form-check-label me-1" style="font-size: 15px;" for="f3">امکانات سه</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f4" class="form-check-input shadow-none me-2">
                  <label class="form-check-label me-1" style="font-size: 15px;" for="f4">امکانات چهار</label>
                </div>
              </div>
              <div class="bg-light p-3 rounded mb-2" style="border: 1px solid #e6e6e6;">
                <h6 class="mb-3" style="font-size: 18px;">ظرفیت اتاق</h6>
                <div class="d-flex">
                  <div class="mb-2">
                    <label class="form-label me-3" style="font-size: 15px;" for="f1">تعداد بزرگسالان</label>
                    <input type="number" class="form-control shadow-none me-2">
                  </div>
                  <div class="mb-2 me-2">
                    <label class="form-label me-3" style="font-size: 15px;" for="f1">تعداد کودکان</label>
                    <input type="number" class="form-control shadow-none me-2">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 px-4">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 card-img-zoom">
              <img src="Image/Rooms/1.jpg" class="img-fluid rounded-3">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h4 class="mb-4 Sans">اتاق دبل سوپر VIP</h4>
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
              <div class="guests">
                <h6 class="mb-1">تعداد مهمانان</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۳ نفر بزرگسال
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۲ نفر کودک
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4 mt-4">هر شب  2.700.000 تومان</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow custom-bg mb-2">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 card-img-zoom">
              <img src="Image/Rooms/2.jpg" class="img-fluid rounded-3">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h4 class="mb-4 Sans">اتاق دبل سوپر VIP</h4>
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
              <div class="guests">
                <h6 class="mb-1">تعداد مهمانان</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۳ نفر بزرگسال
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۲ نفر کودک
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4 mt-4">هر شب  2.700.000 تومان</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow custom-bg mb-2">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 card-img-zoom">
              <img src="Image/Rooms/3.jpg" class="img-fluid rounded-3">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h4 class="mb-4 Sans">اتاق دبل سوپر VIP</h4>
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
              <div class="guests">
                <h6 class="mb-1">تعداد مهمانان</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۳ نفر بزرگسال
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  ۲ نفر کودک
                </span>
              </div>
            </div>
            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
              <h6 class="mb-4 mt-4">هر شب  2.700.000 تومان</h6>
              <a href="#" class="btn btn-sm w-100 text-white shadow custom-bg mb-2">الان رزرو کنید</a>
              <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow">اطلاعات بیشتر</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require("Inc/footer.php");?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>
</html>