<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product) 
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="max-height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-primary">{{ $product->name }}</h5>
                        <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>

                        <div class="mt-auto d-flex justify-content-between">
                            <!-- Edit Button -->
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-success">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            
                            <!-- Delete Form -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
