@extends('layout')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-center">Create New Product</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm p-4">
                    <form action="{{ route('store_product') }}" method="POST">
                        @csrf
                        {{-- Product Name Field --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   name="name" id="name" placeholder="Product Name" value="{{ old('name') }}">
                            <label for="name">Product Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Product Image Field --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('image') is-invalid @enderror" 
                                   name="image" id="image" placeholder="Image URL" value="{{ old('image') }}">
                            <label for="image">Image URL</label>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Product Description Field --}}
                        <div class="form-floating mb-3">
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                      name="description" id="description" placeholder="Product Description" style="height: 100px">{{ old('description') }}</textarea>
                            <label for="description">Product Description</label>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="btn btn-success w-100">Create Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
