@extends('client.layouts.master')

@section('content')

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

@endsection
