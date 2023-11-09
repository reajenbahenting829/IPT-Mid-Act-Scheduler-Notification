@extends('base')

@include('_navbar')

@section('content')
<div class="container ">
    <div class="row">
      <div class="col-md-12 mt-2" >
        <div class="flex">
            <h1>Item List</h1>
            <a href="/product/create" type="button" class="btn float-end mb-lg-2" style="background-color:#ac4e10" >
                <i class="fa-solid fa-user-plus"></i> Add Item
              </a>
        </div>
      </div>
      <table class="table table-bordered">
        <thead style="background-color: #BFACE0">
        <tr>
           
            <th>Item Name</th>
            <th>Brand Name</th>
            <th>Supplier</th>
            <th>Expiry Date</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($product as $prod)
            <tr>
                {{-- <td>{{ $prod->id }}</td> --}}
                <td>{{ $prod->name }}</td>
                <td>{{ $prod->brand }}</td>
                <td>{{ $prod->supplier }}</td>
                <td>{{ $prod->expiry_date }}</td>
                <td>{{ $prod->quantity }}</td>
                <td>{{ $prod->price }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ url('/product/edit/' . $prod->id) }}"
                            class="btn btn-sm" style="background-color:#DEBACE; margin-right:5; height: 30px;"
                            title="Edit product">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form method="POST" action="{{ url('/product/' . $prod->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm" style="background-color:#da1b3e; height: 30px;" title="Delete product">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
  </div>

@endsection
