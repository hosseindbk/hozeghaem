@extends('master')
@section('style')
@endsection
@section('main')

    <body>

    <div class="preloader-area">
        <div class="loading-message">
            <p><span class="dot-1" style="font-size: 80px;font-family:Sahel !important;"> حوزه علمیه </span><span class="dot-2" style="font-size: 80px;font-family:Sahel !important;"> و مدرسه </span><span class="dot-3" style="font-size: 80px;font-family:Sahel !important;"> حضرت قائم (عج) </span></p>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area bg-white p-relative">
        <div class="spacle-responsive-nav">
            <div class="container">
                <div class="spacle-responsive-menu">
                    <div class="logo">
                        <a href="index-digital-marketing-agency.html">
                            <img src="{{asset('site/img/logo.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="spacle-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('Site/img/logo.png')}}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    صفحه اصلی
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">مدرسه علمیه <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            معاونت پژوهش
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="services-1.html" class="nav-link">مقالات</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="services-2.html" class="nav-link">پایان نامه ها</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="services-3.html" class="nav-link">نشست ، کرسی و همایش</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="single-service.html" class="nav-link">کارگروه ها</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">معاونت فرهنگی</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="features-1.html" class="nav-link">فعالیت ها</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="features-2.html" class="nav-link">رسانه</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="features-2.html" class="nav-link">دوره های آموزشی</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="features-2.html" class="nav-link">آیین نامه</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">معاونت آموزش</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="features-1.html" class="nav-link">پذیرش</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="features-2.html" class="nav-link">آیین نامه</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">کتابخانه</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="log-in.html" class="nav-link">اخبار و اطلاعات</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">حوزه علمیه <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-1.html" class="nav-link">حوزه علیمه خواهران</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">حوزه علمیه برادران</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">موسسه خیریه</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="features-1.html" class="nav-link">محصولات</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="features-2.html" class="nav-link">صدقات و نذورات</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">مرکز مشاوره مهفروردینا</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">مهد کودک ضحی</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">مرکز نشر</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">نشریه</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="about.html" class="nav-link">درباره ما</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">تماس با ما</a>
                            </li>
                        </ul>

                        <div class="others-options">
                            <a href="contact.html" class="default-btn">
                                <i class="bx bxs-user"></i>ثبت نام<span></span>
                            </a>
                            <a href="log-in.html" class="optional-btn">
                                <i class="bx bx-log-in"></i>ورود<span></span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Digital Agency Banner -->
    <section class="digital-agency-banner">
        <div class="container">
            <div class="digital-agency-banner-content">
                <h1 class="wow fadeInUp" style="font-family: 'Mehr Nastaliq Web';font-size: 50px !important;">حوزه علمیه و مدرسه حضرت قائم (عج) چیذر</h1>
                <p class="wow fadeInUp">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>
        </div>
    </section>
    <!-- End Digital Agency Banner -->

    <!-- Start Featured Area -->
    <section class="featured-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-featured-box">
                        <img src="{{asset('site/img/marketing-agency/featured-img1.jpg')}}" alt="image">
                        <h3>معاونت پژوهش</h3>
                        <a href="#" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-featured-box">
                        <img src="{{asset('site/img/marketing-agency/featured-img2.jpg')}}" alt="image">
                        <h3>معاونت آموزش</h3>
                        <a href="#" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-featured-box">
                        <img src="{{asset('site/img/marketing-agency/featured-img3.jpg')}}" alt="image">
                        <h3>معاونت فرهنگی</h3>
                        <a href="#" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                        <a href="#" class="link-btn"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Area -->

    <!-- Start Services Area -->
    <section class="services-area ptb-100">
        <div class="container">
            <div class="section-title text-left">
                <span class="sub-title">خدمات</span>
                <h2>قسمت های مختلف حوزه</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="single-service.html">بازاریابی رسانه اجتماعی</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-1">
                                    <img src="{{asset('site/img/marketing-agency/services-img1.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="single-service.html">بهینه سازی محتوا</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-2">
                                    <img src="{{asset('site/img/marketing-agency/services-img2.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="single-service.html">آنالیز پیشرفته</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-3">
                                    <img src="{{asset('site/img/marketing-agency/services-img3.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-services-box">
                        <div class="row m-0">
                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="content">
                                    <h3><a href="single-service.html">بازاریابی ایمیل</a></h3>
                                    <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                                    <a href="single-service.html" class="read-more-btn">ادامه خواندن <i class='bx bx-left-arrow-alt'></i></a>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12 p-0">
                                <div class="image bg-4">
                                    <img src="{{asset('site/img/marketing-agency/services-img4.jpg')}}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="services-btn-box">
                        <a href="services-3.html" class="default-btn">
                            <i class='bx bx-bullseye'></i>مشاهده همه<span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Case Studies Area -->
    <section class="case-studies-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-left">
                <h2>آرشیو مطالب</h2>
            </div>
        </div>

        <div class="container-fluid">
            <div class="case-studies-slides owl-carousel owl-theme">
                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img1.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img2.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img3.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img4.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="single-case-studies-item">
                    <a href="#" class="image d-block">
                        <img src="{{asset('site/img/case-studies/case-studies-img5.jpg')}}" alt="image">
                    </a>

                    <div class="content">
                        <h3><a href="#">سخنرانی و درس اخلاق آیت الله هاشمی اولیا</a></h3>
                        <a href="#" class="link-btn"><i class='bx bx-left-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Case Studies Area -->

    <!-- Start Feedback Area -->
    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title text-left">
                        <h2>نشست های برگزار شده</h2>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="testimonials-slides-two owl-carousel owl-theme">
                        <div class="single-testimonials-box">
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="client-info">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('site/img/user1.jpg')}}" alt="image">
                                    <div class="title">
                                        <h3>جان اسمیت</h3>
                                        <span>توسعه دهنده پایتون</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonials-box">
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="client-info">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('site/img/user2.jpg')}}" alt="image">
                                    <div class="title">
                                        <h3>جان اسمیت</h3>
                                        <span>توسعه دهنده پایتون</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonials-box">
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>

                            <div class="client-info">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('site/img/user3.jpg')}}" alt="image">
                                    <div class="title">
                                        <h3>جان اسمیت</h3>
                                        <span>توسعه دهنده پایتون</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Feedback Area -->

    <!-- Start Partner Area -->
    <section class="partner-area-two ptb-70 bg-f9f9f9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img1.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img2.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img3.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img4.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img5.png')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-2 col-6 col-sm-3 col-md-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-partner-box">
                        <img src="{{asset('site/img/partner-image/img6.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner Area -->

    <!-- Start Blog Area -->
    <section class="blog-area pt-100 pb-70 bg-f4e9da">
        <div class="container">
            <div class="section-title text-left">
                <h2>اخبار و رویداد</h2>
            </div>

            <div class="blog-slides owl-carousel owl-theme">
                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/10.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">آموزش</a>
                        <h3><a href="#">پذیرش در دانشگاه می تواند با کنترل اضطراری روبرو شود</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{asset('site/img/author-image/9.jpg')}}" class="rounded-circle" alt="image">
                                    <span>الکس مورگان</span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1398
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/11.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">سئو</a>
                        <h3><a href="#">پذیرش در دانشگاه می تواند با کنترل اضطراری روبرو شود</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{asset('site/img/author-image/8.jpg')}}" class="rounded-circle" alt="image">
                                    <span>الکس مورگان</span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1398
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/12.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">تجارت</a>
                        <h3><a href="#">پذیرش در دانشگاه می تواند با کنترل اضطراری روبرو شود</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{asset('site/img/author-image/7.jpg')}}" class="rounded-circle" alt="image">
                                    <span>الکس مورگان</span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1398
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="single-blog-post-item">
                    <div class="post-image">
                        <a href="#" class="d-block">
                            <img src="{{asset('site/img/blog-image/13.jpg')}}" alt="image">
                        </a>
                    </div>

                    <div class="post-content">
                        <a href="#" class="category">آموزش</a>
                        <h3><a href="#">پذیرش در دانشگاه می تواند با کنترل اضطراری روبرو شود</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{asset('site/img/author-image/6.jpg')}}" class="rounded-circle" alt="image">
                                    <span>الکس مورگان</span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-calendar'></i> 30 دی 1398
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start Company Preview Area -->
    <div class="company-preview-area">
        <div class="container">
            <div class="company-preview-video">
                <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube"><i class="bx bx-play"></i></a>
            </div>
        </div>
    </div>
    <!-- End Company Preview Area -->

    <!-- Start Let's Talk Area -->
    <section class="lets-talk-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="lets-talk-content">
                        <span class="sub-title wow fadeInUp">درباره ما</span>
                        <h2 class="wow fadeInUp">درباره حوزه علمیه و مدرسه حضرت قائم (عج) چیذر</h2>
                        <p class="wow fadeInUp">لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است. لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                </div>
            </div>
        </div>
    </section>
    <!-- End Let's Talk Area -->

@endsection
@section('script')
@endsection
