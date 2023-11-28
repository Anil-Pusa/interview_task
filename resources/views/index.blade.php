@extends('layouts.app') 
@section('content')
    <a class="btn btn-primary" href="{{ route('module1') }}">POST Method</a>
    <a class="btn btn-primary" href="{{ route('module2') }}">Ajax Method</a>
@endsection