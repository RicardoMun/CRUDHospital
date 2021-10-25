@extends('dashBoard.master')
@section('content')
    <form action="{{ route('doctor.store') }}" method="post">
        @include('dashBoard.doctors._form')
    </form>
    
@endsection