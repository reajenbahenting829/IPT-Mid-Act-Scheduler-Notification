@extends('base')

@include('_navbar')

@section('content')
<div class="row">
    <div class="col-md-12 mt-2" >
      <div class="flex">
          <h1>Log List</h1>

      </div>

    </div>

  </div>
  <table class="table table-bordered">
    <thead style="background-color: #BFACE0">
    <tr>
        {{-- <th>Medicine ID</th> --}}
        <th>Timestamp</th>
        <th>Log Entry</th>

    </tr>
    </thead>
    <tbody>
      @foreach ($logEntries as $logEntry)
        <tr>
            {{-- <td>{{ $med->id }}</td> --}}
            <td>{{ $logEntry->formattedCreatedAt }}</td>
            <td>{{ $logEntry->log_entry }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection
