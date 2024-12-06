@extends('frontend.layout.app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title text-center mb-4">Create an Account</h5>
        <form action="/register" method="POST">
          <!-- CSRF Token for Laravel -->
          <!-- @csrf -->

          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
          </div>

          <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Re-enter your password" required>
          </div>

          <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>

        <div class="text-center mt-4">
          <p class="mb-0">Already have an account? <a href="/login" class="text-decoration-none">Login</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection