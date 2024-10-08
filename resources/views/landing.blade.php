<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Garage Hotel Services</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-villa-agency.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    {{-- <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="fa fa-envelope"></i> services@gragehotel.com</li>
                        <li><i class="fa fa-map"></i> Grage Hotel, FL 33160</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- ***** Header Area Start ***** -->
    {{-- <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{asset('assets/images/logo.png')}}" style="width: 80px; margin-top:7px;" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="properties.html">About</a></li>
                            <li><a href="property-details.html">Services</a></li>
                            <li><a href="contact.html">Formulir Feedback</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- ***** Header Area End ***** -->

    {{-- <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                   
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                   
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="featured section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image">
                        <img src="assets/images/featured.jpg" alt="">
                        <a href="property-details.html"><img src="assets/images/featured-icon.jpeg" alt=""
                                style="max-width: 60px; padding: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| Featured</h6>
                        <h2>Best Appartment &amp; Sea view</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Best useful links ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for
                                    your business. TemplateMo provides you the <a
                                        href="https://www.google.com/search?q=best+free+css+templates"
                                        target="_blank">best free CSS templates</a> in the world. Please tell your
                                    friends about it.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How does this work ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why is Villa Agency the best ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                <h4>250 m2<br><span>Total Flat Space</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                <h4>Contract<br><span>Contract Ready</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                                <h4>Payment<br><span>Payment Process</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                                <h4>Safety<br><span>24/7 Under Control</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="video section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Video View</h6>
                        <h2>Get Closer View & Different Feeling</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-frame">
                        <img src="assets/images/video-frame.jpg" alt="">
                        <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                    <p class="count-text ">Buildings<br>Finished Now</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                    <p class="count-text ">Years<br>Experience</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                    <p class="count-text ">Awwards<br>Won 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="section best-deal">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>| Best Deal</h6>
                        <h2>Find Your Best Deal Right Now!</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper ">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                                            data-bs-target="#appartment" type="button" role="tab"
                                            aria-controls="appartment" aria-selected="true">Appartment</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="villa-tab" data-bs-toggle="tab"
                                            data-bs-target="#villa" type="button" role="tab" aria-controls="villa"
                                            aria-selected="false">Villa House</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                            data-bs-target="#penthouse" type="button" role="tab"
                                            aria-controls="penthouse" aria-selected="false">Penthouse</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                    aria-labelledby="appartment-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>185 m2</span></li>
                                                    <li>Floor number <span>26th</span></li>
                                                    <li>Number of rooms <span>4</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-01.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Extra Info About Property</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                                tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                                suspendisse.
                                                <br><br>When you need free CSS templates, you can simply type TemplateMo
                                                in any search engine website. In addition, you can type TemplateMo
                                                Portfolio, TemplateMo One Page Layouts, etc.</p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule
                                                    a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>250 m2</span></li>
                                                    <li>Floor number <span>26th</span></li>
                                                    <li>Number of rooms <span>5</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-02.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Detail Info About Villa</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                                tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                                suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper
                                                mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella
                                                venmo after messenger poutine next level humblebrag swag franzen.</p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule
                                                    a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="penthouse" role="tabpanel"
                                    aria-labelledby="penthouse-tab">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="info-table">
                                                <ul>
                                                    <li>Total Flat Space <span>320 m2</span></li>
                                                    <li>Floor number <span>34th</span></li>
                                                    <li>Number of rooms <span>6</span></li>
                                                    <li>Parking Available <span>Yes</span></li>
                                                    <li>Payment Process <span>Bank</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <img src="assets/images/deal-03.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3">
                                            <h4>Extra Info About Penthouse</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod
                                                tempor pack incididunt ut labore et dolore magna aliqua quised ipsum
                                                suspendisse. <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper
                                                mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella
                                                venmo after messenger poutine next level humblebrag swag franzen.</p>
                                            <div class="icon-button">
                                                <a href="property-details.html"><i class="fa fa-calendar"></i> Schedule
                                                    a visit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="properties section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Properties</h6>
                        <h2>We Provide The Best Property You Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$2.264.000</h6>
                        <h4><a href="property-details.html">18 New Street Miami, OR 97219</a></h4>
                        <ul>
                            <li>Bedrooms: <span>8</span></li>
                            <li>Bathrooms: <span>8</span></li>
                            <li>Area: <span>545m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>6 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.180.000</h6>
                        <h4><a href="property-details.html">54 Mid Street Florida, OR 27001</a></h4>
                        <ul>
                            <li>Bedrooms: <span>6</span></li>
                            <li>Bathrooms: <span>5</span></li>
                            <li>Area: <span>450m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>8 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
                        <span class="category">Luxury Villa</span>
                        <h6>$1.460.000</h6>
                        <h4><a href="property-details.html">26 Old Street Miami, OR 38540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>5</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>225m2</span></li>
                            <li>Floor: <span>3</span></li>
                            <li>Parking: <span>10 spots</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-04.jpg" alt=""></a>
                        <span class="category">Apartment</span>
                        <h6>$584.500</h6>
                        <h4><a href="property-details.html">12 New Street Miami, OR 12650</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>3</span></li>
                            <li>Area: <span>125m2</span></li>
                            <li>Floor: <span>25th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-05.jpg" alt=""></a>
                        <span class="category">Penthouse</span>
                        <h6>$925.600</h6>
                        <h4><a href="property-details.html">34 Beach Street Miami, OR 42680</a></h4>
                        <ul>
                            <li>Bedrooms: <span>4</span></li>
                            <li>Bathrooms: <span>4</span></li>
                            <li>Area: <span>180m2</span></li>
                            <li>Floor: <span>38th</span></li>
                            <li>Parking: <span>2 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="property-details.html"><img src="assets/images/property-06.jpg" alt=""></a>
                        <span class="category">Modern Condo</span>
                        <h6>$450.000</h6>
                        <h4><a href="property-details.html">22 New Street Portland, OR 16540</a></h4>
                        <ul>
                            <li>Bedrooms: <span>3</span></li>
                            <li>Bathrooms: <span>2</span></li>
                            <li>Area: <span>165m2</span></li>
                            <li>Floor: <span>26th</span></li>
                            <li>Parking: <span>3 cars</span></li>
                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>Form</h6>
                        <h2 style="color:#032b2b ">Berikan Penilaian Layanan Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                {{-- <div class="col-lg-7">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>010-020-0340<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>info@villa.co<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <form id="contact-form" action="{{ route('submit.feedback') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="no_kamar">No Kamar </label>
                                    <input type="no_kamar" name="no_kamar" id="no_kamar" placeholder="No Kamar..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="nama">Nama </label>
                                    <input type="nama" name="nama" id="nama" placeholder="Nama..." autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="alamat">Alamat </label>
                                    <input type="alamat" name="alamat" id="alamat" placeholder="Alamat..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="phone">Phone</label>
                                    <input type="phone" name="phone" id="phone" placeholder="Phone..." autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="email">Email </label>
                                    <input type="email" name="email" id="email" placeholder="Email..." autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="email">Maksud Kunjungan </label>
                                    <select name="maksud_kunjungan" id="">
                                        <option value="">Pilih</option>
                                        <option value="Bisnis">Bisnis</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Bersama Rombongan">Bersama Rombongan</option>
                                    </select>
                                </fieldset>
                            </div>
                            <p>Apakah Anda Merasa Puas Dengan</p>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Kamar</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="kamar" value="sangat_bagus"
                                                class="single-checkbox kamar-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="kamar" value="bagus"
                                                class="single-checkbox kamar-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="kamar" value="cukup"
                                                class="single-checkbox kamar-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="kamar" value="kurang"
                                                class="single-checkbox kamar-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Makan Pagi</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="makan_pagi"
                                                value="sangat_bagus" class="single-checkbox makan-pagi-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="makan_pagi" value="bagus"
                                                class="single-checkbox makan-pagi-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="makan_pagi" value="cukup"
                                                class="single-checkbox makan-pagi-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="makan_pagi" value="kurang"
                                                class="single-checkbox makan-pagi-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Makan Dan Minuman</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="makan_minuman"
                                                value="sangat_bagus" class="single-checkbox makan-minum-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="makan_minuman" value="bagus"
                                                class="single-checkbox makan-minum-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="makan_minuman" value="cukup"
                                                class="single-checkbox makan-minum-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="makan_minuman" value="kurang"
                                                class="single-checkbox makan-minum-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Pelayanan Seluruhan</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="pelayanan"
                                                value="sangat_bagus" class="single-checkbox pelayanan-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="pelayanan" value="bagus"
                                                class="single-checkbox pelayanan-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="pelayanan" value="cukup"
                                                class="single-checkbox pelayanan-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="pelayanan" value="kurang"
                                                class="single-checkbox pelayanan-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Kebersihan</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="kebersihan"
                                                value="sangat_bagus" class="single-checkbox kebersihan-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="kebersihan" value="bagus"
                                                class="single-checkbox kebersihan-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="kebersihan" value="cukup"
                                                class="single-checkbox kebersihan-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="kebersihan" value="kurang"
                                                class="single-checkbox kebersihan-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Pelayanan SPA</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="pelayanan_spa"
                                                value="sangat_bagus" class="single-checkbox fasilitas-spa-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="pelayanan_spa" value="bagus"
                                                class="single-checkbox fasilitas-spa-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="pelayanan_spa" value="cukup"
                                                class="single-checkbox fasilitas-spa-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="pelayanan_spa" value="kurang"
                                                class="single-checkbox fasilitas-spa-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Penampilan Karyawan</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="penampilan_karyawan"
                                                value="sangat_bagus" class="single-checkbox penampilan-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="penampilan_karyawan" value="bagus"
                                                class="single-checkbox penampilan-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="penampilan_karyawan" value="cukup"
                                                class="single-checkbox penampilan-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="penampilan_karyawan" value="kurang"
                                                class="single-checkbox penampilan-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="feedback"><b>Keramahtamahan</b></label>
                                        <div class="checkbox-group">
                                            <label for="sangat_bagus">Sangat Bagus</label>
                                            <input type="checkbox" id="sangat_bagus" name="keramahtamahan"
                                                value="sangat_bagus" class="single-checkbox keramahtamahan-checkbox">
                                            </label>
                                            <label for="bagus">Bagus</label>
                                            <input type="checkbox" id="bagus" name="keramahtamahan" value="bagus"
                                                class="single-checkbox keramahtamahan-checkbox">
                                            </label>
                                            <label for="cukup">Cukup</label>
                                            <input type="checkbox" id="cukup" name="keramahtamahan" value="cukup"
                                                class="single-checkbox keramahtamahan-checkbox">
                                            </label>
                                            <label for="kurang">Kurang</label>
                                            <input type="checkbox" id="kurang" name="keramahtamahan" value="kurang"
                                                class="single-checkbox keramahtamahan-checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="Kunjungan">Apakah ini Merupakan Kunjuan Pertama </label>
                                    <input type="Kunjungan" name="Kunjungan" id="Kunjungan" placeholder="Kunjungan..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="datang">Apakah anda akan datang kembali </label>
                                    <input type="datang" name="datang" id="datang" placeholder="datang..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <label for="datanag">Saran Anda </label>
                                    <textarea name="saran" id="" cols="30" rows="10"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Contact Us</h6>
                        <h2>Get In Touch With Our Agents</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>010-020-0340<br><span>Phone Number</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>info@villa.co<br><span>Business Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Full Name</label>
                                    <input type="name" name="name" id="name" placeholder="Your Name..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subject</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <footer>
        <div class="container">
            <div class="col-lg-8">
                <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

                    Design: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
        </div>
    </footer> --}}

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/counter.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        // Fungsi untuk membatasi pilihan checkbox dalam satu grup
        function limitCheckboxSelection(groupClass) {
            document.querySelectorAll(`.${groupClass}`).forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    // Jika checkbox ini di-check, un-check semua checkbox lainnya dalam grup
                    if (this.checked) {
                        document.querySelectorAll(`.${groupClass}`).forEach(function (otherCheckbox) {
                            if (otherCheckbox !== checkbox) {
                                otherCheckbox.checked = false;
                            }
                        });
                    }
                });
            });
        }

        // Batasi pilihan checkbox untuk kategori "Kamar"
        limitCheckboxSelection('kamar-checkbox');
        limitCheckboxSelection('makan-pagi-checkbox');
        limitCheckboxSelection('makan-minum-checkbox');
        limitCheckboxSelection('pelayanan-checkbox');
        limitCheckboxSelection('kebersihan-checkbox');
        limitCheckboxSelection('fasilitas-spa-checkbox');
        limitCheckboxSelection('penampilan-checkbox');
        limitCheckboxSelection('keramahtamahan-checkbox');

    </script>

</body>

</html>
