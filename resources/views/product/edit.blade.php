@extends('base')

@include('_navbar')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center">Edit Item</h1>
        <hr>

        <form  action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Use PUT or PATCH for updates -->

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="brand">Brand Name</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ $product->brand }}">
                @error('brand')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="{{ $product->supplier }}">
                @error('supplier')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" id="expiry_date" class="form-control" value="{{ $product->expiry_date }}">
                @error('expiry_date')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}">
                @error('quantity')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex">
                {{-- <div class="flex-grow-1">
                    <a href="{{ '/' }}">Already have an account? Log in</a>
                </div> --}}
                <button class="btn btn-primary px-5" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection





