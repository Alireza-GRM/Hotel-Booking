  <nav class="border-nav container-fluid mt-4 navbar navbar-expand-lg bg-white px-lg-5 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand HotelName me-3 fw-Bold fs-3 h-font" href="index.php">Hotel | Shiraz</a>

    <!-- menu -->
    <button class="navbar-toggler" style="width: 35px; height: 35px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
      <span class="navbar-toggler-icon" style="width: 20px; margin-right: -5px; margin-top: -2px;"></span>
    </button>
    <div class="offcanvas offcanvas-end menu-width menu-panel" style="width: 270px; top: 20px; right: 13px; bottom: 20px;" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="HotelName pt-3 pe-3" >Hotel | Shiraz</h5>
          <button class="navbar-toggler" style="width: 35px; height: 35px; position: absolute; left: 20px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon" style="width: 20px; margin-right: -5px; margin-top: -2px;"></span>
          </button>
        </div>
        <div class="line-menu bg-dark"></div>
        <div class="offcanvas-body">
          <ul class="navbar-nav menu-txt-items">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="index.php">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="rooms.php">اتاق ها</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="facilities.php">امکانات</a>
            </li>
            <li class="nav-item dropdown TextRTL">
              <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ولاگ
              </a>
              <ul class="dropdown-menu TextRTL" style="font-size: 14px;">
                <li><a class="dropdown-item" href="#">جاذبه های گردشگری</a></li>
                <li><a class="dropdown-item" href="#">مکان های تفریحی</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">سایر موارد</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="about.php">درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">تماس باما</a>
            </li>
          </ul>
          <div class="d-flex menu-btn-items" role="search">
            <button type="button" class="btn btn-outline-dark shadow" style="font-size: 13px;" data-bs-toggle="modal" data-bs-target="#loginModal">ورود</button>
            <button type="button" class="btn btn-dark shadow me-lg-2 me-2 ms-1" style="font-size: 13px;" data-bs-toggle="modal" data-bs-target="#registerModal">ایجاد حساب</button>
          </div>
        </div>
        <div class="offcanvas-footer">
          <div class="p-1 m-2 rounded-4 hidden-developed align-items-center">
            <h6 class="text-center text-dark" style="font-size: 13px;">Designed and Developed in 2024© by <span style="color: #02caac; font-size: 15px;">Alireza Garmkhorany</span></h6>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center ms-2" style="font-size: 17px;"><i class="bi bi-person-circle fs-3 me-2 ms-2 mt-1"></i> ورود به حساب </h5>
            <button type="reset" class="btn-close shadow-none" style="font-size: 15px; position: absolute; left: 10px;" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label" style="font-size: 15px;">آدرس ایمیل</label>
              <input type="email" class="form-control shadow-none" style="font-size: 14px;">
            </div>
            <div class="mb-4">
              <label class="form-label" style="font-size: 15px;">رمز عبور</label>
              <input type="password" class="form-control shadow-none" style="font-size: 14px;">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow" style="font-size: 13px; padding-left: 20px; padding-right: 20px;">ورود به حساب</button>
              <!-- <button type="button" class="btn btn-outline-secondary shadow-none" style="font-size: 13px; padding-left: 10px; padding-right: 10px; margin-left: 110px;" data-bs-dismiss="modal">بستن</button> -->
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">رمز عبور را فراموش کرده اید؟</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center ms-2" style="font-size: 17px;"><i class="bi bi-person-add fs-3 me-2 ms-2 mt-1"></i>ایجاد حساب</h5>
            <button type="reset" class="btn-close shadow-none" style=" font-size: 15px; position: absolute; left: 10px;" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
            توجه: مشخصات شما باید با شناسه شما (کارت ملی و پاسپورت و غیره) که در هنگام ورود به سیستم مورد نیاز است مطابقت داشته باشد.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-2 mb-3">
                  <label class="form-label" style="font-size: 15px;">نام و نام خانوادگی</label>
                  <input type="text" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label" style="font-size: 15px;">ایمیل</label>
                  <input type="email" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-2 mb-3">
                  <label class="form-label" style="font-size: 15px;">شماره تماس</label>
                  <input type="number" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label" style="font-size: 15px;">انتخاب عکس</label>
                  <input type="file" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-12 ps-0 mb-3">
                  <label class="form-label" style="font-size: 15px;">آدرس منزل</label>
                  <textarea class="form-control shadow-none" style="font-size: 14px;" rows="2"></textarea>
                </div>
                <div class="col-md-6 ps-2 mb-3">
                  <label class="form-label" style="font-size: 15px;">پین کد</label>
                  <input type="number" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label" style="font-size: 15px;">تاریخ تولد</label>
                  <input type="date" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-2 mb-3">
                  <label class="form-label" style="font-size: 15px;">رمز عبور</label>
                  <input type="password" class="form-control shadow-none" style="font-size: 14px;">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label" style="font-size: 15px;">تکرار رمز عبور</label>
                  <input type="password" class="form-control shadow-none" style="font-size: 14px;">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
              <button type="submit" class="btn btn-dark shadow" style="font-size: 13px; padding-left: 20px; padding-right: 20px;">ایجاد حساب</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>