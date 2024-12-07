@extends('frontend.layout.app')

@section('content')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow-lg" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title text-center mb-4">Create an Account</h5>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('success_message'))
            <div class="alert alert-success">
                {{ Session::get('success_message') }}
            </div>
        @endif

        <form action="{{ route('home.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="mb-3 position-relative">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#password">
                    <i class="fa fa-eye"></i>
                </button>
            </div>
          </div>
        
          <div class="mb-3 position-relative">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" placeholder="Re-enter your password" required>
                <button type="button" class="btn btn-outline-secondary toggle-password" data-target="#confirmPassword">
                    <i class="fa fa-eye"></i>
                </button>
            </div>
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

@section('register_scripts')
<script>
    $(document).ready(function () {
        console.log("Register script loaded");

        // Toggle password visibility
        $('.toggle-password').on('click', function () {
            const target = $(this).data('target'); // Get the target input field
            const inputField = $(target);
            const type = inputField.attr('type') === 'password' ? 'text' : 'password';
            inputField.attr('type', type);

            // Toggle the eye icon
            $(this).find('i').toggleClass('fa-eye fa-eye-slash');
        });
    });
</script>
@endsection
