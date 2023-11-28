@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endpush   
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Create
</button>
<a href="/" class="btn btn-primary">Home</a>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Register User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('create.user') }}" method="post">
            @csrf
            <input type="text" class="form-control" name="user_name" placeholder="Name">
            <input type="text" class="form-control" name="email" placeholder="Email Id">
            <input type="text" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
  
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)            
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name ?? '' }}</td>
            <td>{{ $user->email ?? '' }}</td>
            <td>{{ date('d/m/Y', strtotime($user->created_at)) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@push('js')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>  
@endpush