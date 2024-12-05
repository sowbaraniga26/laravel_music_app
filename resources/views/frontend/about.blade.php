@extends('frontend.layout.app')

@section('content')
 <!-- Hero Section -->
 <div class="bg-light py-5">
    <div class="container text-center">
        <h1 class="display-4">About Us</h1>
        <p class="lead">Learn more about our journey, values, and team.</p>
    </div>
</div>

<!-- Company History -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>Founded in 2010, our company has been committed to delivering exceptional products and services to our customers. We started as a small team and have grown into a global brand, thanks to our dedicated team and loyal clients.</p>
            </div>
            <div class="col-md-6">
                <img src="https://via.placeholder.com/500" class="img-fluid rounded" alt="Company History">
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Meet Our Team</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member">
                <h5>Jane Doe</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member">
                <h5>John Smith</h5>
                <p>CTO</p>
            </div>
            <div class="col-md-4">
                <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Team Member">
                <h5>Emily Davis</h5>
                <p>Head of Marketing</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <p>We'd love to hear from you! Reach out with any questions or feedback.</p>
        <a href="mailto:info@company.com" class="btn btn-primary">Email Us</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-light py-3">
    <div class="container text-center">
        <p>&copy; 2024 Company. All rights reserved.</p>
    </div>
</footer>



@endsection()
