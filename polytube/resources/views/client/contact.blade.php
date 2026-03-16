@extends('client.layouts.master')

@section('content')

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
                                       placeholder="Subject" required>
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

@endsection
