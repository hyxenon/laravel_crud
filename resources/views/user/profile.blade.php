@extends('layout')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4">Profile</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-plaintext" id="floatingEmail" 
                               placeholder="name@example.com" value="{{ $email }}" readonly>
                        <label for="floatingEmail">Email Address</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control form-control-plaintext" id="floatingName" 
                               placeholder="Your Name" value="{{ $name }}" readonly>
                        <label for="floatingName">Full Name</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
