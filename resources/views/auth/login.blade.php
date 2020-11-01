@extends('layouts.auth')

@section('title', 'login')

@section('content')
    <form class="card card-md" action="{{ route('login') }}" method="post">
        @csrf
        <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"
               value="{{ old('email') }}" required autofocus autocomplete="off">

        <br><br>

        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>
@endsection
