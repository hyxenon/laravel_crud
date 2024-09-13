<!-- resources/views/products/edit.blade.php -->
@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">Edit Product</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm p-4">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    {{-- Product Name --}}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                               name="name" placeholder="Product Name" value="{{ old('name', $product->name) }}" required>
                        <label for="name">Product Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Image URL --}}
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" 
                               name="image" placeholder="Image URL" value="{{ old('image', $product->image) }}">
                        <label for="image">Image URL</label>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" placeholder="Product Description" style="height: 100px">{{ old('description', $product->description) }}</textarea>
                        <label for="description">Product Description</label>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Submit Button --}}
                    <button type="submit" class="btn btn-primary w-100">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
