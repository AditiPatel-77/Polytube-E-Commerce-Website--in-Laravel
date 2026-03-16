@extends('client.layouts.master')

@section('content')

<!-- Hero Section 
<div class="container py-5 text-center">
    <h1 class="fw-bold">Welcome to Polytube</h1>
    <p class="lead">Premium Cosmetic Packaging Containers & Tubes</p>
    <a href="{{ route('client.products') }}" class="btn btn-primary rounded-pill px-4">
        View Products
    </a>
</div> -->

  <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('client/img/carousel1.jpeg') }}" width="650" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Cosmetic Packaging Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">High Quality Tubes & Containers</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Durable, stylish and eco-friendly packaging for your brand.</p>
                                <a href="{{ route('client.about') }}" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="{{ route('client.contact') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('client/img/back.jpeg') }}" width="850" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-secondary h4 animated fadeInUp">Cosmetic Packaging Solutions</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInLeft">High Quality Tubes & Containers</h1>
                                <p class="mb-4 text-white fs-5 animated fadeInDown">Durable, stylish and eco-friendly packaging for your brand.</p>
                                <!-- <a href="{{ route('client.about') }}" class="btn btn-primary rounded-pill px-4">
                            About Us
                        </a> -->
                                <a href="{{ route('client.about') }}" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Read More</button></a>
                                <a href="{{ route('client.contact') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->



<!-- About Short Section 
<div class="container py-5 text-center">
    <h2>Why Choose Polytube?</h2>
    <p>
        We manufacture cosmetic tubes, jars, and packaging containers with
        high quality materials and modern finishing options.
    </p>
</div> -->

  <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Success in getting happy customer</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Thousands of successful business</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total clients who love HighTech</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">5</h1>
                            <h5 class="text-white mt-1">Stars reviews given by satisfied clients</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

        <!-- About Start -->
        <div class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{ asset('client/img/tube5.jpeg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('client/img/tube1.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">About Us</h5>
                        <h1 class="mb-4">Polytube provides high-quality cosmetic packaging containers</h1>
                        <p>Polytube provides high-quality cosmetic packaging containers
                    including tubes, bottles, jars, and customized packaging solutions. 
                    We focus on durability, attractive design, and reliable materials 
                    for all cosmetic and personal care products.</p>
                        <p class="mb-4"> Our goal is to deliver safe, stylish, and cost-effective packaging 
                    that helps brands stand out in the market. We support bulk orders, 
                    custom sizes, and branding options for your business needs.</p>
                        <!-- <a href="{{ route('client.about') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More Details</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

<!-- Services Start -->
<div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Our Services</h5>
            <h1>Packaging Solutions For Your Cosmetic Brand</h1>
        </div>

        <div class="row g-5 services-inner">

            <!-- Service 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-industry fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Tube Manufacturing</h4>
                            <p class="mb-4">
                                High-quality cosmetic tubes in multiple sizes and materials 
                                for creams, gels, and lotions.
                            </p>
                            <a href="{{ route('client.products') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-box fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Bottle & Jar Supply</h4>
                            <p class="mb-4">
                                Durable bottles and jars for cosmetic and personal care 
                                packaging needs.
                            </p>
                            <a href="{{ route('client.products') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                View Products
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-paint-brush fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Custom Printing</h4>
                            <p class="mb-4">
                                Custom logo printing and labeling options for your 
                                brand packaging.
                            </p>
                            <a href="{{ route('client.contact') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-cogs fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Custom Sizes</h4>
                            <p class="mb-4">
                                Flexible size and shape options to match your exact 
                                product requirements.
                            </p>
                            <a href="{{ route('client.contact') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                Ask Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-truck fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Bulk Orders</h4>
                            <p class="mb-4">
                                Large quantity production with fast delivery and 
                                quality assurance.
                            </p>
                            <a href="{{ route('client.contact') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                Order Bulk
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-check-circle fa-4x mb-4 text-primary"></i>
                            <h4 class="mb-3">Quality Testing</h4>
                            <p class="mb-4">
                                Strong material testing to ensure leak-proof and 
                                safe packaging.
                            </p>
                            <a href="{{ route('client.about') }}" class="btn btn-secondary text-white px-4 py-2 rounded-pill">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->

<!-- category Start -->

    <div class="container py-5">

    <div class="text-center mb-5">
        <h5 class="text-primary">Our Categories</h5>
        <h2>Explore Product Categories</h2>
    </div>

    <div class="row justify-content-center">

        @foreach($categories as $category)

        <div class="col-lg-4 col-md-6 mb-4 d-flex">
        <!-- <div class="col-lg-4 col-md-6 mb-4"> -->

            <div class="category-card">

          

                  <div class="category-image">
                    <img src="{{ asset('uploads/categories/'.$category->category_image) }}"
                         alt="{{ $category->category_name }}">
                </div> 

                <div class="category-content">
                    <h4>{{ $category->category_name }}</h4>
              
            
                    <a href="{{ route('client.category_products', $category->id) }}"
   class="btn btn-primary btn-sm">
   View Products
</a>

                    
                </div>

            </div>

        </div>
        @endforeach

    </div>
</div>
<!-- category End -->

<!-- Contact Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Get In Touch</h5>
            <h1 class="mb-3">Contact for any query</h1>
            <p class="mb-2">
                Please fill the form below and we will contact you soon.
            </p>
        </div>

        <div class="contact-detail position-relative p-5">

            <!-- Contact Info -->
            <div class="row g-5 mb-5 justify-content-center">

                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="btn-square bg-secondary rounded-circle"
                             style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <p class="h5">107- Ravapar road, Morbi</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="btn-square bg-secondary rounded-circle"
                             style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <p class="h5">+91 9998820687</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="btn-square bg-secondary rounded-circle"
                             style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <p class="h5">polytube@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row g-5">

                <!-- Map -->
                <div class="col-lg-6">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100"
                                src="https://www.google.com/maps?q=india&output=embed"
                                style="border:0;"></iframe>
                    </div>
                </div>

                <!-- Form -->
                <div class="col-lg-6">
                    <div class="p-5 rounded contact-form">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('client.contact.save') }}">
                            @csrf

                            <div class="mb-4">
                                <input type="text" name="name"
                                       class="form-control py-3"
                                       placeholder="Your Name" required>
                            </div>

                            <div class="mb-4">
                                <input type="email" name="email"
                                       class="form-control py-3"
                                       placeholder="Your Email" required>
                            </div>

                            <div class="mb-4">
                                <input type="text" name="subject"
                                       class="form-control py-3"
                                       placeholder="Subject">
                            </div>

                            <div class="mb-4">
                                <textarea name="message"
                                          class="form-control py-3"
                                          rows="6"
                                          placeholder="Message"
                                          required></textarea>
                            </div>

                            <button class="btn bg-primary text-white py-3 px-5"
                                    type="submit">
                                Send Message
                            </button>

                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 my-5">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Our Testimonial</h5>
            <h1>Our Client Saying!</h1>
        </div>

        <div class="owl-carousel testimonial-carousel">

            @foreach($testimonials as $t)
            <div class="testimonial-item border p-4">

                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ asset('uploads/testimonials/'.$t->image) }}"
                             width="90"
                             height="90"
                             style="object-fit:cover;border-radius:50%;">
                    </div>

                    <div class="ms-4">
                        <h4 class="text-secondary">{{ $t->name }}</h4>
                        <p class="m-0 pb-3">{{ $t->profession }}</p>

                        <div class="d-flex pe-5">
                            @for($i=1; $i<=5; $i++)
                                <i class="fas fa-star me-1 {{ $i <= $t->rating ? 'text-primary' : 'text-muted' }}"></i>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="border-top mt-4 pt-3">
                    <p class="mb-0">{{ $t->message }}</p>
                </div>

            </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Testimonial End -->

<!-- Team Start -->
<div class="container-fluid py-5 my-5 team">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5" style="max-width: 600px;">
            <h5 class="text-primary">Our Team</h5>
            <h1>Meet our expert Team</h1>
        </div>

        <div class="owl-carousel team-carousel">

            @foreach($teams as $team)
            <div class="rounded team-item">
                <div class="team-content">
                    <div class="team-img-icon">

                        <div class="team-img rounded-circle">
                            <img src="{{ asset('uploads/teams/'.$team->image) }}"
                                 class="img-fluid w-100 rounded-circle">
                        </div>

                        <div class="team-name text-center py-3">
                            <h4>{{ $team->name }}</h4>
                            <p class="m-0">{{ $team->designation }}</p>
                        </div>

                        <div class="team-icon d-flex justify-content-center pb-4">

                            @if($team->facebook)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            @endif

                            @if($team->twitter)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->twitter }}"><i class="fab fa-twitter"></i></a>
                            @endif

                            @if($team->instagram)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a>
                            @endif

                            @if($team->linkedin)
                            <a class="btn btn-square btn-secondary text-white rounded-circle m-1"
                               href="{{ $team->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</div>
<!-- Team End -->





      
      
      
        
@endsection
