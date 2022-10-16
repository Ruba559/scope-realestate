<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="css/main.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
</head>
<body dir="rtl">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white fixed-top">
        
        <button class="navbar-toggler" data-target="#top_nav" data-toggle="collapse" aria-controls="top_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="top_nav" class="collapse navbar-collapse bg-white">
            <ul class="navbar-nav mx-auto">
                <li>
                    <a class="navbar-brand mx-5"><img class="img-fluid my-auto" width="150px" src="images/logo.png" alt=""></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1">عن سكوب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1">حمل التطبيق</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1">سياسة الخصوصية</a>
                </li>
                <form action="">
                    <div class="form-group">
                        <input id="my-input" class="form-control scope-input text-center mx-2" type="text" name="" placeholder="بحث في سكوب">
                    </div>
                </form>
                <li>
                    <a href="" class="btn radius-15 bg-green text-white mx-5">تسجيل الدخول</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section class="row justify-content-center align-items-center">
            <div class="col-12 header">
                
                <div class="w-100  header-bg" width="100%" style="border-radius: 30px;background-image: url('images/realestates/2.webp');background-position: center;background-repeat: no-repeat;background-size:cover;">
                   
                    <div class="overlay"></div>
                    <!-- <h1>الموقع الأول <span class="text-green">للعقارات في سوريا</span></h1> -->
                    <h1>الموقع الأول للعقارات في سوريا</h1>
                    <div class="searchbox d-flex flex-column justify-content-start">
                        <!-- <p>البحث السريع</p> -->
                        <form class="d-flex flex-row justify-content-between align-items-center" method="get" action="">
                            <div class="form-group">
                                <label for="my-input">المحافظة</label>
                                <input id="my-input" class="form-control scope-input" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label for="my-input">النوع</label>
                                <input id="my-input" class="form-control scope-input" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label for="my-input">الحد الأعلى للسعر</label>
                                <input id="my-input" class="form-control scope-input" type="text" name="">
                            </div>
                            <button class="btn search-btn mx-2 " style="margin-top: 18px" type="submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="row justify-content-between align-items-center my-3">
                    <div class="col-12 text-center my-5">
                        <h2 class="text-grey font-weight-bold">الإعلانات العقارية <span class="text-green">في المحافظات السورية</span></h2>
                    </div>
                <div class="col-md-2 col-6  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/damascus.jpg');">
                        <p class="city-name">
                            دمشق
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-6 city-container  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/Aleppo_Citadel_04.jpg');">
                        <p class="city-name">
                            حلب
                        </p>
                    </div>
                    
                    
                </div>
                <div class="col-md-2 col-6 city-container  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/homs.jpg');">
                        <p class="city-name">
                            حمص
                        </p>
                    </div>
                    
                    
                </div>
                <div class="col-md-2 col-6 city-container  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/latakia.jpg');">
                        <p class="city-name">
                            اللاذقية
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 city-container  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/rif-latakia.jpg');">
                        <p class="city-name">
                            طرطوس
                        </p>
                    </div>
                    
                </div>
                <div class="col-md-2 col-6 city-container  p-2" >
                    <div class="city-container" style="background-image: url('images/cities/rika.jpg');">
                        <p class="city-name">
                            الرقة
                        </p>
                    </div>
                    
                </div>
        </section>
        <section class="row justify-content-between align-items-center my-5">
            <div class="col-12 d-flex flex-row justify-content-between mt-5">
                <h4 class="text-green font-weight-bold"> المضافة مؤخراً</h4>
                <a class="text-grey" href="">عرض الكل</a>
            </div>
            <div class="col-md-6 col-12">
                <div class="  property-item d-flex flex-row justify-content-start align-items-start my-5">
                    <img class="im-fluid" src="images/realestates/1.jpg" alt="">
                    <div class="properties d-flex flex-column w-100 justify-content-start align-items-start">
                        <h5 class="font-weight-bold">منزل للبيع في المالكي</h5>
                        <p > 50.000.000 ل.س</p>
                        <div class="spec flex-row ">
                            <span class="fa fa-bed"></span><span class="mx-2">5</span>  <span class="fas fa-arrows-alt"></span><span class="mx-2">جنوبي</span> 
                            <span class="fas fa-expand-arrows-alt"></span><span class="mx-2">قبلي</span>  <span class="fas fa-shower"></span><span class="mx-2">5</span> 
                        </div>
                        <a class="btn" href="">صفحة العقار</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="  property-item d-flex flex-row justify-content-start align-items-start my-5">
                    <img class="im-fluid" src="images/realestates/1.jpg" alt="">
                    <div class="properties d-flex flex-column w-100 justify-content-start align-items-start">
                        <h5 class="font-weight-bold">منزل للبيع في المالكي</h5>
                        <p > 50.000.000 ل.س</p>
                        <div class="spec flex-row ">
                            <span class="fa fa-bed"></span><span class="mx-2">5</span>  <span class="fas fa-arrows-alt"></span><span class="mx-2">جنوبي</span> 
                            <span class="fas fa-expand-arrows-alt"></span><span class="mx-2">قبلي</span>  <span class="fas fa-shower"></span><span class="mx-2">5</span> 
                        </div>
                        <a class="btn" href="">صفحة العقار</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="  property-item d-flex flex-row justify-content-start align-items-start my-5">
                    <img class="im-fluid" src="images/realestates/1.jpg" alt="">
                    <div class="properties d-flex flex-column w-100 justify-content-start align-items-start">
                        <h5 class="font-weight-bold">منزل للبيع في المالكي</h5>
                        <p > 50.000.000 ل.س</p>
                        <div class="spec flex-row ">
                            <span class="fa fa-bed"></span><span class="mx-2">5</span>  <span class="fas fa-arrows-alt"></span><span class="mx-2">جنوبي</span> 
                            <span class="fas fa-expand-arrows-alt"></span><span class="mx-2">قبلي</span>  <span class="fas fa-shower"></span><span class="mx-2">5</span> 
                        </div>
                        <a class="btn" href="">صفحة العقار</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="  property-item d-flex flex-row justify-content-start align-items-start my-5">
                    <img class="im-fluid" src="images/realestates/1.jpg" alt="">
                    <div class="properties d-flex flex-column w-100 justify-content-start align-items-start">
                        <h5 class="font-weight-bold">منزل للبيع في المالكي</h5>
                        <p > 50.000.000 ل.س</p>
                        <div class="spec flex-row ">
                            <span class="fa fa-bed"></span><span class="mx-2">5</span>  <span class="fas fa-arrows-alt"></span><span class="mx-2">جنوبي</span> 
                            <span class="fas fa-expand-arrows-alt"></span><span class="mx-2">قبلي</span>  <span class="fas fa-shower"></span><span class="mx-2">5</span> 
                        </div>
                        <a class="btn" href="">صفحة العقار</a>
                    </div>
                    
                </div>
            </div>
        </section>
        
    </div>
    <footer class="container-fluid bg-black ">
        <div class="container p-md-5 p-2">
            <div class="row justify-content-center align-items-start">
                <div class="col-md-3 col-12 text-center p-md-3 p-5  align-self-center">
                    <img class="img-fluid" src="images/logo-white.png" width="150px" alt="">
                    <h6 class="text-white font-wight-bold">موقع سكوب العقاري</h6>
                </div>
                <div class="col-md-3 col-6 text-right p-md-3 p-5">
                    <ul>
                       <p class="text-grenn"> الوصول السريع</p>
                        <li>
                            <a href="">الرئيسية</a>
                        </li>
                        <li>
                            <a href="">عن الموقع</a>
                        </li>
                        <li>
                            <a href="">حمل التطبيق</a>
                        </li>
                        <li>
                            <a href="">سياسة الخصوصية</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-6 text-right p-md-3 p-5">
                    <ul>
                       <p class="text-grenn"> العقارات</p>
                        <li>
                            <a href="">المضافة مؤخراً </a>
                        </li>
                        <li>
                            <a href="">عقارات دمشق</a>
                        </li>
                        <li>
                            <a href="">عقارات حلب</a>
                        </li>
                        <li>
                            <a href="">عقارات اللاذقية</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-12 text-center p-md-3 p-5 align-self-center">
                    <h6 class="text-white font-wight-bold">تابعنا على مواقع التواصل</h6>
                    <div class="social-icons">
                       <a href=""><span class="fab fa-facebook-f"></span></a> 
                       <a href=""> <span class="fab  fa-telegram"></span></a> 
                       <a href=""> <span class="fab  fa-instagram"></span></a> 
                       <a href=""> <span class="fab  fa-whatsapp"></span></a> 
                    </div>
                    <p class="text-white my-2">info@scope.sy</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>