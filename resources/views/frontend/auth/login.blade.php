@extends('frontend.layout.app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title text-center mb-4">Login</h5>
        <form action="{{ route('home.authenticate') }}" method="POST">
          <!-- CSRF Token for Laravel -->
          @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                <button type="button" class="btn btn-outline-secondary toggle-password" tabindex="-1">
                    <i class="fa fa-eye"></i>
                </button>
            </div>
        </div>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
              <input type="checkbox" id="remember" name="remember">
              <label for="remember" class="form-label">Remember me</label>
            </div>
            <a href="/password/reset" class="text-decoration-none">Forgot Password?</a>
          </div>

          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-4">
          <p class="mb-0">Don't have an account? <a href="/register" class="text-decoration-none">Register</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('login_scripts')
<script>
    $(document).ready(function () {
        console.log("login working");
        
        $('.toggle-password').on('click', function () {
            const passwordField = $('#password');
            const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);

            // Toggle the eye icon
            $(this).find('i').toggleClass('fa-eye fa-eye-slash');
        });
    });
</script>
@endsection