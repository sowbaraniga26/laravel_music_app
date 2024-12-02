@extends('frontend.layout.app')

@section('title')

homepage

@endsection

@section('content')

<!-- Hero Section -->
<section class="hero bg-light text-center py-5">
    <div class="container">
      <h1 class="display-4">Welcome to My Website</h1>
      <p class="lead">Your one-stop solution for all your needs.</p>
      <a href="#" class="btn btn-primary">Learn More</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Features</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Feature 1">
            <div class="card-body">
              <h5 class="card-title">Feature 1</h5>
              <p class="card-text">Brief description of feature 1. Learn more about its benefits and usage.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Feature 2">
            <div class="card-body">
              <h5 class="card-title">Feature 2</h5>
              <p class="card-text">Brief description of feature 2. Learn more about its benefits and usage.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Feature 3">
            <div class="card-body">
              <h5 class="card-title">Feature 3</h5>
              <p class="card-text">Brief description of feature 3. Learn more about its benefits and usage.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call-to-Action Section -->
  <section class="cta bg-primary text-white text-center py-5">
    <div class="container">
      <h2>Join Us Today!</h2>
      <p>Start exploring the endless possibilities with our services.</p>
      <a href="#" class="btn btn-light">Get Started</a>
    </div>
  </section>

@endsection