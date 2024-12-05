@extends('frontend.layout.app')

@section('content')
<!-- Hero Section -->
<div class="bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4">Our Services</h1>
        <p class="lead">We offer a range of services to meet your needs.</p>
    </div>
</div>

<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">What We Offer</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-gear-fill text-primary display-4 mb-3"></i>
                        <h5 class="card-title">Custom Development</h5>
                        <p class="card-text">Tailored software solutions to fit your unique business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-bar-chart-line-fill text-success display-4 mb-3"></i>
                        <h5 class="card-title">Data Analytics</h5>
                        <p class="card-text">Insightful data analysis to help you make informed decisions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="bi bi-laptop-fill text-warning display-4 mb-3"></i>
                        <h5 class="card-title">IT Support</h5>
                        <p class="card-text">Reliable IT support to ensure your operations run smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Call to Action -->
<section class="bg-primary text-light py-5 text-center">
    <div class="container">
        <h2>Ready to Work With Us?</h2>
        <p>Contact us today to learn more about how we can help your business succeed.</p>
        <a href="mailto:info@company.com" class="btn btn-light">Get in Touch</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-light py-3">
    <div class="container text-center">
        <p>&copy; 2024 Company. All rights reserved.</p>
    </div>
</footer>

@endsection()
