<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>HOTEL - CONTACT US</title>
    <link rel="stylesheet" href="Css/common.css">
</head>
<body class="bg-light" dir="rtl">
  
  <?php require("Inc/header.php");?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center HotelName fs-2">Contact - Us</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Atque at ratione illo natus libero odit <br> eveniet repudiandae neque modi. 
      Voluptatem, rem saepe. Beatae vel hic molestias quasi nisi accusamus maiores
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">
        <div class="bg-white rounded-2 shadow p-4">
          <iframe class="w-100 rounded-3 mb-3" height="340px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221932.78312517962!2d52.69658373817206!3d29.641462957995635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fb20d0c8c85f2e3%3A0x6d0c5b8aef6b4cf6!2z2LTbjNix2KfYstiMINin2LPYqtin2YYg2YHYp9ix2LPYjCDYp9uM2LHYp9mG!5e0!3m2!1sfa!2s!4v1724764145608!5m2!1sfa!2s"loading="lazy"></iframe>
          
          <h5>آدرس هتل سنتی شیراز :</h5>
          <a href="https://maps.app.goo.gl/apmLwxdwxrB62QmN9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2 me-2"><i class="bi bi-geo-alt-fill"></i>خیابان مولوی ، نرسیده به پل خواجو ، هتل سنتی شیراز</a>
          <h5 class="mt-4">تماس با ما :</h5>
          <a href="tel : +989103168371" class="d-inline-block mb-2 mt-1 text-decoration-none text-dark me-2">
            <i class="bi bi-telephone-fill"></i> +98 910-316-8371
          </a>
          <br>
          <a href="tel : +989388322425" class="d-inline-block text-decoration-none text-dark me-2">
            <i class="bi bi-telephone-fill"></i> +98 938-832-2425
          </a>

          <h5 class="mt-4">ایمیل :</h5>
          <a href="mailto : alireza.g84129@gmail.com" class="d-inline-block text-decoration-none text-dark me-2">
            <i class="bi bi-envelope-fill fs-5"></i> alireza.g84129@gmail.com
          </a>

          <h5 class="mt-4">ما را دنبال کنید :</h5>
          <a href="#" class="d-inline-block mt-1 text-dark fs-5 me-2">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="#" class="d-inline-block me-2 text-dark fs-5 me-2">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="#" class="d-inline-block me-2 text-dark fs-5 me-2">
            <i class="bi bi-facebook"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded-2 shadow p-4">
          <form>
            <h5>ارسال پیام به پشتیبانی :</h5>
            <div class="mb-3 mt-4">
              <label class="form-label" style="font-size: 17px;">نام و نام خانوادگی</label>
              <input type="text" class="form-control shadow-none" style="font-size: 15px;">
            </div>
            <div class="mb-3 mt-4">
              <label class="form-label" style="font-size: 17px;">پست الکترونیک</label>
              <input type="email" class="form-control shadow-none" style="font-size: 15px;">
            </div>
            <div class="mb-3 mt-4">
              <label class="form-label" style="font-size: 17px;">موضوع</label>
              <input type="text" class="form-control shadow-none" style="font-size: 15px;">
            </div>
            <div class="mb-3 mt-4">
              <label class="form-label" style="font-size: 17px;">متن پیام</label>
              <textarea class="form-control shadow-none" style="font-size: 15px; resize: none;" rows="5"></textarea>
            </div>
            <button type="submit" class="btn text-white custom-bg shadow mt-3" style="font-size: 15px; padding-left: 40px; padding-right: 40px;">ارسال</button>
          </form>
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