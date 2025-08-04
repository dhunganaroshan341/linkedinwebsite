<!DOCTYPE html>
<html lang="en">

@php
    $css =
        '<link href="' .
        asset('assets/css/module-css/banner.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/clients.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/about.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/funfact.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/chooseus.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/category.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/industries.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/process.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/team.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/news.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/subscribe.css') .
        '" rel="stylesheet">
            <link href="' .
        asset('assets/css/module-css/footer.css') .
        '" rel="stylesheet">';
@endphp
@include('components.head')

<!-- page wrapper -->

<body>

    <div class="boxed_wrapper ltr">

        <!-- preloader -->
        @include('components.preloader')
        <!-- preloader end -->

        <!-- page-direction -->
        @include('components.pageDirection')
        <!-- page-direction end -->

        <!--Search Popup-->
        @include('components.searchPopup')

        <!-- main header -->
        <header class="main-header header-style-one">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box pl_15"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current">
                                            <a href="{{ route('index') }}">Home</a>
                                            {{--
                <ul>
                    <li><a href="{{ route('index') }}">Home One</a></li>
                    <li><a href="{{ route('index2') }}">Home Two</a></li>
                    <li><a href="{{ route('index3') }}">Home Three</a></li>
                    <li><a href="{{ route('index4') }}">Home Four</a></li>
                    <li><a href="{{ route('index5') }}">Home Five</a></li>
                </ul>
                --}}
                                        </li>

                                        <li><a href="{{ route('about') }}">About</a></li>

                                        <li class="dropdown">
                                            <a href="{{ route('index') }}">Job</a>
                                            <ul>
                                                <li><a href="{{ route('job') }}">Place Job</a></li>
                                                <li><a href="{{ route('job2') }}">Job Seekers</a></li>
                                                <li><a href="{{ route('job3') }}">Job Openings</a></li>
                                                <li><a href="{{ route('job4') }}">Job Apply</a></li>
                                                <li><a href="{{ route('jobDetails') }}">Job Details</a></li>
                                            </ul>
                                        </li>

                                        {{--
            <li><a href="{{ route('team') }}">Our Team</a></li>
            <li><a href="{{ route('faq') }}">FAQ's</a></li>
            <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('signup') }}">Sign Up</a></li>
            <li><a href="{{ route('pageError') }}">404</a></li>
            --}}

                                        <li class="dropdown">
                                            <a href="{{ route('index') }}">Blog</a>
                                            <ul>
                                                <li><a href="{{ route('blog') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('blog2') }}">Blog Standard</a></li>
                                                <li><a href="{{ route('blogDetails') }}">Blog Details</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>

                        </div>
                        <div class="menu-right-content">
                            <div class="search-btn mr_20"><button class="search-toggler"><i class="icon-1"></i></button>
                            </div>
                            <div class="link-box mr_20"><a href="{{ route('login') }}">Log In</a></div>
                            <div class="btn-box"><a href="{{ route('index') }}" class="theme-btn btn-one">Get
                                    Started</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box pl_15"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="search-btn mr_20"><button class="search-toggler"><i class="icon-1"></i></button>
                            </div>
                            <div class="link-box mr_20"><a href="{{ route('login') }}">Log In</a></div>
                            <div class="btn-box"><a href="{{ route('index') }}" class="theme-btn btn-one">Get
                                    Started</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        @include('components.mobileMenu')
        <!-- End Mobile Menu -->

        <!-- banner-section -->
        <section class="banner-section p_relative centred">
            <div class="pattern-layer" style="background-image: url('{{ asset('assets/images/shape/shape-1.png') }}')">
            </div>
            <div class="author-box">
                <div class="author author-1"><img src="{{ asset('assets/images/resource/author-1.png') }}"
                        alt=""><span>Waiter</span></div>
                <div class="author author-2"><img src="{{ asset('assets/images/resource/author-2.png') }}"
                        alt=""><span>Assistant</span></div>
                <div class="author author-3"><img src="{{ asset('assets/images/resource/author-3.png') }}"
                        alt=""><span>Painter</span></div>
                <div class="author author-4"><img src="{{ asset('assets/images/resource/author-4.png') }}"
                        alt=""><span>Finance</span></div>
                <div class="author author-5"><img src="{{ asset('assets/images/resource/author-5.png') }}"
                        alt=""><span>Cleaner</span></div>
                <div class="author author-6"><img src="{{ asset('assets/images/resource/author-6.png') }}"
                        alt=""><span>Nurse</span></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Find Your Next Career Here Our Open Positions</h2>
                    <p>Explore our open positions to find roles that align with your interests and expertise. From
                        entry-level positions to leadership roles.</p>
                    <div class="btn-box">
                        <a href="{{ route('index') }}" class="theme-btn btn-one mr_20"><span>Find Works</span></a>
                        <a href="{{ route('index') }}" class="theme-btn banner-btn">Hire Talents Now</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->

        <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-1.png') }}" alt=""></a>
                        </figure>
                        <figure class="overlay-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-2.png') }}" alt=""></a>
                        </figure>
                        <figure class="overlay-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-2.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-3.png') }}" alt=""></a>
                        </figure>
                        <figure class="overlay-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-3.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-4.png') }}" alt=""></a>
                        </figure>
                        <figure class="overlay-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-4.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="clients-box">
                        <figure class="clients-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-5.png') }}" alt=""></a>
                        </figure>
                        <figure class="overlay-logo"><a href="{{ route('index') }}"><img
                                    src="{{ asset('assets/images/clients/clients-5.png') }}" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-section end -->

        <!-- about-section -->
        <section class="about-section pt_120 pb_120">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                        <div class="video_block_one">
                            <div class="video-box p_relative pt_40 pb_40 pl_30 centred">
                                <div class="image-layer">
                                    <figure class="image-1"><img
                                            src="{{ asset('assets/images/resource/video-3.jpg') }}" alt="">
                                    </figure>
                                    <figure class="image-2"><img
                                            src="{{ asset('assets/images/resource/video-2.jpg') }}" alt="">
                                    </figure>
                                </div>
                                <div class="video-inner"
                                    style="background-image: url('{{ asset('assets/images/resource/video-1.jpg') }}')">
                                    <div class="video-content">
                                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s"
                                            class="lightbox-image video-btn" data-caption=""><i
                                                class="icon-8"></i><span
                                                class="border-animation border-1"></span><span
                                                class="border-animation border-2"></span><span
                                                class="border-animation border-3"></span></a>
                                        <h6>Watch Video</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box ml_80">
                                <div class="sec-title pb_20 sec-title-animation animation-style2">
                                    <span class="sub-title mb_10 title-animation">About us</span>
                                    <h2 class="title-animation">The Leading Hospitality Staffing <span>Platform</span>
                                    </h2>
                                </div>
                                <div class="text-box">
                                    <p>This staffing platform provides access to a diverse pool of qualified candidates
                                        with specialized skills in areas such as hospitality management.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>This helps businesses maintain service excellence</li>
                                        <li>This scalability allows businesses to adjust staffing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

        <!-- funfact-section -->
        <section class="funfact-section centred pb_90">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="12">00</span><span class="symble">k</span>
                                </div>
                                <p>Freelance Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="95">00</span><span class="symble">%</span>
                                </div>
                                <p>Jobs Fulfillment Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="12">00</span><span class="symble">k+</span>
                                </div>
                                <p>Jobs Filled</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="funfact-block-one">
                            <div class="inner-box">
                                <div class="count-outer">
                                    <span class="odometer" data-count="825">00</span><span class="symble">+</span>
                                </div>
                                <p>Satisfied Businesses</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->

        <div class="slide-text">
            <div class="text-inner">
                <ul class="text-list">
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                    <li>Warehouse</li>
                    <li>Hospitality</li>
                    <li>Manufacturing</li>
                    <li>Special Events</li>
                    <li>General Labor</li>
                </ul>
            </div>
        </div>

        <!-- chooseus-section -->
        <section class="chooseus-section pt_200 pb_90">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-2.png') }}')"></div>
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Why Us</span>
                    <h2 class="title-animation">Why Choose Us</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h3><a href="{{ route('index') }}">Retain Top Talent</a></h3>
                                    <p>Providing clear career paths and growth opportunities is key to retaining top
                                        talent.</p>
                                    <div class="link"><a href="{{ route('index') }}">Learn More<i
                                                class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-5"></i></div>
                                    <h3><a href="{{ route('index') }}">Stay Compliant</a></h3>
                                    <p>Educate employees about compliance requirements through regular training</p>
                                    <div class="link"><a href="{{ route('index') }}">Learn More<i
                                                class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-6"></i></div>
                                    <h3><a href="{{ route('index') }}">Improve Employee</a></h3>
                                    <p>Invest in employee training and development programs to enhance skills and
                                        knowledge.</p>
                                    <div class="link"><a href="{{ route('index') }}">Learn More<i
                                                class="icon-7"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->

        <!-- category-section -->
        <section class="category-section centred pt_120 pb_70">
            <div class="bg-box">
                <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                    style="background-image: url('{{ asset('assets/images/background/category-bg.jpg') }}')"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title light pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Category</span>
                    <h2 class="title-animation">Researching Companies <br />Before Applying</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one">
                            <div class="inner-box">
                                <h2>For Local Workers</h2>
                                <p>Join over 1 million workers who use GravyWork to <br />find flexible and temp to hire
                                </p>
                                <a href="{{ route('jobDetails') }}" class="theme-btn btn-one">Find Work</a>
                                <figure class="image-box image-hov-one"><img
                                        src="{{ asset('assets/images/resource/category-1.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 category-block">
                        <div class="category-block-one">
                            <div class="inner-box">
                                <h2>For Business Owner</h2>
                                <p>Finding individuals who share your company's values and <br />vision can contribute
                                    to a cohesive</p>
                                <a href="{{ route('jobDetails') }}" class="theme-btn btn-one">Find Employee</a>
                                <figure class="image-box image-hov-two"><img
                                        src="{{ asset('assets/images/resource/category-2.jpg') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- category-section end -->

        <!-- industries-section -->
        <section class="industries-section pt_20 pb_120">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Industries</span>
                    <h2 class="title-animation">Industries Served</h2>
                </div>
                <div class="inner-container clearfix">
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-9"></i></div>
                            <h3><a href="{{ route('index') }}">Hotel</a></h3>
                            <p>2853 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-10"></i></div>
                            <h3><a href="{{ route('index') }}">Hospitality</a></h3>
                            <p>2256 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-11"></i></div>
                            <h3><a href="{{ route('index') }}">Kitchen</a></h3>
                            <p>1408 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-12"></i></div>
                            <h3><a href="{{ route('index') }}">Retail</a></h3>
                            <p>1740 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-13"></i></div>
                            <h3><a href="{{ route('index') }}">Special Events</a></h3>
                            <p>3948 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-14"></i></div>
                            <h3><a href="{{ route('index') }}">General Labor</a></h3>
                            <p>2984 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-15"></i></div>
                            <h3><a href="{{ route('index') }}">Driving</a></h3>
                            <p>4509 Staffs</p>
                        </div>
                    </div>
                    <div class="industries-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-16"></i></div>
                            <h3><a href="{{ route('index') }}">Senior Living</a></h3>
                            <p>1039 Staffs</p>
                        </div>
                    </div>
                </div>
                <div class="btn-box centred mt_60"><a href="{{ route('index') }}" class="theme-btn btn-one">View All
                        Categories</a></div>
            </div>
        </section>
        <!-- industries-section end -->

        <!-- process-section -->
        <section class="process-section pt_120 pb_90">
            <div class="pattern-layer"
                style="background-image: url('{{ asset('assets/images/shape/shape-3.png') }}')"></div>
            <div class="auto-container">
                <div class="sec-title light centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Process</span>
                    <h2 class="title-animation">How It Works?</h2>
                </div>
                <div class="tabs-box">
                    <ul class="tab-btns tab-buttons">
                        <li class="tab-btn active-btn" data-tab="#tab-1"><i class="far fa-user"></i>For Talents</li>
                        <li class="tab-btn" data-tab="#tab-2"><i class="far fa-briefcase"></i>For Business</li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">1</span>
                                            <h3><a href="{{ route('index') }}">Sign up, It's Free!</a></h3>
                                            <p>Our team will set up your account and help you build job to easy-to-use
                                                web dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">2</span>
                                            <h3><a href="{{ route('index') }}">Post jobs in minutes</a></h3>
                                            <p>Create and post anywhere from 1-100 job openings with just a few clicks.
                                                customize your own.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">3</span>
                                            <h3><a href="{{ route('index') }}">Review Your Staff</a></h3>
                                            <p>View bios, reviews, and rosters before workers arrive on the job, and
                                                post reviews and pay, effortlessly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">1</span>
                                            <h3><a href="{{ route('index') }}">Sign up, It's Free!</a></h3>
                                            <p>Our team will set up your account and help you build job to easy-to-use
                                                web dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">2</span>
                                            <h3><a href="{{ route('index') }}">Post jobs in minutes</a></h3>
                                            <p>Create and post anywhere from 1-100 job openings with just a few clicks.
                                                customize your own.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                                    <div class="processing-block-one">
                                        <div class="inner-box">
                                            <span class="count-text">3</span>
                                            <h3><a href="{{ route('index') }}">Review Your Staff</a></h3>
                                            <p>View bios, reviews, and rosters before workers arrive on the job, and
                                                post reviews and pay, effortlessly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section -->

        <!-- team-section -->
        {{-- <section class="team-section centred pt_120 pb_70">
            <div class="auto-container">
                <div class="sec-title pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Our Team</span>
                    <h2 class="title-animation">Meet The Team</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/images/team/team-1.jpg') }}" alt=""></figure>
                                    <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-1.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ route('index') }}">Tom Oliver</a></h3>
                                    <span class="designation">Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/images/team/team-2.jpg') }}" alt=""></figure>
                                    <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-2.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ route('index') }}">Loenard Barnes</a></h3>
                                    <span class="designation">Lead Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/images/team/team-3.jpg') }}" alt=""></figure>
                                    <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-3.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ route('index') }}">Gilbert Sherman</a></h3>
                                    <span class="designation">Sale Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ asset('assets/images/team/team-4.jpg') }}" alt=""></figure>
                                    <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-4.jpg') }}" alt=""></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ route('index') }}">Franklin Bailey</a></h3>
                                    <span class="designation">Art Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/team/team-5.jpg') }}" alt=""></figure>
                                        <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-5.jpg') }}" alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('index') }}">Antonio Alex</a></h3>
                                        <span class="designation">Lead Engineer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/team/team-6.jpg') }}" alt=""></figure>
                                        <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-6.jpg') }}" alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('index') }}">Diarmuid Eoin</a></h3>
                                        <span class="designation">Sale Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                            <div class="team-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{ asset('assets/images/team/team-7.jpg') }}" alt=""></figure>
                                        <figure class="overlay-image"><img src="{{ asset('assets/images/team/team-7.jpg') }}" alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <h3><a href="{{ route('index') }}">Ashitaka Dai</a></h3>
                                        <span class="designation">Art Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- team-section end -->

        <!-- news-section -->
        <section class="news-section pb_90">
            <div class="auto-container">
                <div class="sec-title centred pb_60 sec-title-animation animation-style2">
                    <span class="sub-title mb_10 title-animation">Media</span>
                    <h2 class="title-animation">Latest News</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-1.jpg') }}')">
                                </div>
                                <div class="overlay-bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-1.jpg') }}')">
                                </div>
                                <div class="content-box">
                                    <span class="post-date">March 20, 2023</span>
                                    <h4><a href="{{ route('blogDetails') }}">Create a series of blog posts discussing
                                            common interview</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-2.jpg') }}')">
                                </div>
                                <div class="overlay-bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-2.jpg') }}')">
                                </div>
                                <div class="content-box">
                                    <span class="post-date">March 19, 2023</span>
                                    <h4><a href="{{ route('blogDetails') }}">Explore the concept of personal branding
                                            and its impact on</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-3.jpg') }}')">
                                </div>
                                <div class="overlay-bg-layer"
                                    style="background-image: url('{{ asset('assets/images/news/news-3.jpg') }}')">
                                </div>
                                <div class="content-box">
                                    <span class="post-date">March 18, 2023</span>
                                    <h4><a href="{{ route('blogDetails') }}">Feature interviews with employees from
                                            top companies</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->

        <!-- subscribe-section -->
        <section class="subscribe-section pt_100 pb_100 centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}'
                style="background-image: url('{{ asset('assets/images/background/subscribe-bg.jpg') }}')"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Subscribe Newsletter</h2>
                    <div class="form-inner">
                        <form method="post" action="{{ route('contact') }}">
                            <div class="form-group">
                                <div class="icon-box"><i class="far fa-envelope"></i></div>
                                <input type="email" name="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-one">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <p>You can unsubscribe at any time.</p>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="widget-section p_relative pt_80 pb_100">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget mr_30">
                                <figure class="footer-logo mb_20"><a href="{{ route('index') }}"><img
                                            src="{{ asset('assets/images/logo.png') }}" alt=""></a></figure>
                                <p>Since 2018, JobAway has connecting hospitality workers to thousands of business,
                                    private events and universities.</p>
                                <div class="download-btn">
                                    <a href="{{ route('about') }}" class="apple-store">
                                        <img src="{{ asset('assets/images/icons/icon-4.png') }}" alt="">
                                        <span>Download on</span>
                                        App Store
                                    </a>
                                    <a href="{{ route('about') }}" class="play-store">
                                        <img src="{{ asset('assets/images/icons/icon-5.png') }}" alt="">
                                        <span>Get it on</span>
                                        Google Play
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Workers</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('index') }}">Find Work</a></li>
                                        <li><a href="{{ route('index') }}">Jobs in Dubai</a></li>
                                        <li><a href="{{ route('index') }}">Jobs in Virginia</a></li>
                                        <li><a href="{{ route('index') }}">Jobs in California</a></li>
                                        <li><a href="{{ route('index') }}">Jobs in Alaska</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>For Business</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('index') }}">Merchandising</a></li>
                                        <li><a href="{{ route('index') }}">Hospitality Staff</a></li>
                                        <li><a href="{{ route('index') }}">General Labour</a></li>
                                        <li><a href="{{ route('index') }}">Car Drivers</a></li>
                                        <li><a href="{{ route('index') }}">Bus Driver</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Company</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('index') }}">Career</a></li>
                                        <li><a href="{{ route('index') }}">Partners</a></li>
                                        <li><a href="{{ route('blog') }}">Blog</a></li>
                                        <li><a href="{{ route('index') }}">Clients</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Help & Support</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                        <li><a href="{{ route('faq') }}">General FAQ</a></li>
                                        <li><a href="{{ route('index') }}">Support Center</a></li>
                                        <li><a href="{{ route('index') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('index') }}">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <div class="copyright">
                            <p>Copyright &copy; 2025 <a href="{{ route('index') }}">JobAway</a> All rights reserved.
                            </p>
                        </div>
                        <ul class="social-links">
                            <li>
                                <h5>Follow Us On:</h5>
                            </li>
                            <li><a href="{{ route('index') }}"><i class="icon-22"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="icon-23"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="icon-24"></i></a></li>
                            <li><a href="{{ route('index') }}"><i class="icon-25"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

        <!--Scroll to top-->
        @include('components.scroll')

    </div>

    @include('components.script')

</body><!-- End of .page_wrapper -->

</html>
