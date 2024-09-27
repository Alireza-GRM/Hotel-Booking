<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>HOTEL - ABOUT US</title>
    <link rel="stylesheet" href="Css/common.css">
    <style>
      .box{
        border-top-color: var(--teal) !important;
      }
    </style>
</head>
<body class="bg-light" dir="rtl">
  
  <?php require("Inc/header.php");?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center HotelName fs-2">About - Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Atque at ratione illo natus libero odit <br> eveniet repudiandae neque modi. 
      Voluptatem, rem saepe. Beatae vel hic molestias quasi nisi accusamus maiores
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3" style="font-family: Sans;">فونت های پیش فرض وزیر</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Quos, fugiat nam perferendis cum odit et vel!
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Quos, fugiat nam perferendis cum odit et vel!
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
        <img src="Image/about us/1.jpg" class="w-100 rounded-4 shadow">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded-3 shadow p-4 border-top border-4 text-center box">
          <img src="Image/about us/hotel.png">
          <h4 class="mt-3">12 اتاق برای پذیرایی</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded-3 shadow p-4 border-top border-4 text-center box">
          <img src="Image/about us/customer.png">
          <h4 class="mt-3">1000 نفر مشتری</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded-3 shadow p-4 border-top border-4 text-center box">
          <img src="Image/about us/review.png">
          <h4 class="mt-3">150+ بازدید</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded-3 shadow p-4 border-top border-4 text-center box">
          <img src="Image/about us/agent.png">
          <h4 class="mt-3">10+ کارکنان</h4>
        </div>
      </div>
    </div>
  </div>

  <h3 class="mt-5 fw-bold HotelName text-center">Management Team</h3>
  <div class="container p-4">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded-3">
          <img src="Image/about us/Team.jpg" class="w-100">
          <h5 class="mt-2">Alireza Garmkhorani</h5>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>



  <?php require("Inc/footer.php");?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      spaceBetween: 40, 
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
          slidesPerView: 4,
        },
      },
      loop: true,
      delay: 3000,
      autoplay: true,
    });
  </script>
</body>
</html>