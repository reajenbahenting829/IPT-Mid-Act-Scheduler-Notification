@extends('base')

@include('_navbar')
@section('content')

<div class="container">

    <h1 class="text-center mt-2">Hello, {{$user->name}}</h1>

    <h2>All Registered Users</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($regUser as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                </tr>
          @endforeach
        </tbody>
      </table>

</div>
@endsection
