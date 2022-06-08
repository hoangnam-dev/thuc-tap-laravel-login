@extends('layouts.base')
@section('content')
    <div class="container mx-auto mt-5">
        <h2>HAS LOGIN</h2>
        <h2>WELCOME</h2>
    </div>
    <a href="{{ route('logout') }}" class="text-danger fs-3">Logout</a>
@endsection


