@extends('frontend.layout.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Profile</h4>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="https://via.placeholder.com/150" alt="User Avatar" class="rounded-circle" width="150" height="150">
                        @if(auth()->user()->name)
                        <h5 class="mt-3">{{ auth()->user()->name }}</h5>
                        @endif
                        <p class="text-muted">{{ auth()->user()->email }}</p>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6><strong>Full Name:</strong></h6>
                            <p>{{ auth()->user()->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6><strong>Phone Number:</strong></h6>
                            <p>+1 234 567 890</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h6><strong>Address:</strong></h6>
                            <p>123 Main Street, New York, USA</p>
                        </div>
                        <div class="col-md-6">
                            <h6><strong>Joined On:</strong></h6>
                            <p>January 1, 2023</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="/edit-profile" class="btn btn-primary me-2">Edit Profile</a>
                        <a href="/logout" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
