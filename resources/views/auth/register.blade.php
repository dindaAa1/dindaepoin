@extends('auth.layouts')

@section('content')
<h1>Register</h1>
<a href="{{ route('login') }}">Login</a>
<br><br>
<form action="{{ route('store') }}" method="POST">

    @csrf
    <label>Nama Lengkap</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br>

    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

    <br>
    <label>Email Addres</label><br>
    <input type="email" id="email" name="email" value="{{ old('email') }}"><br>

