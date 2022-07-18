@extends('layouts/site')

@section('content')
    <h1><span>{{ $subtitle }}</span></h1>
    <form method="post" action="contact/post">
        @csrf
        <input type="text" name="fname" id="fname" placeholder="name">
        @if ($errors->has('fname'))
            <div style="color:red;">{{ $errors->first('fname') }}</div>
        @endif
        <input type="text" name="address" id="address" placeholder="address">
        <input type="text" name="email" id="email" placeholder="email">
        @if ($errors->has('email'))
            <div style="color:red;">{{ $errors->first('email') }}</div>
        @endif
        <input type="text" name="phone" id="phone" placeholder="phone number">
        <textarea name="message" id="message" placeholder="message"></textarea>
        @if ($errors->has('message'))
            <div style="color:red;">{{ $errors->first('message') }}</div>
        @endif
        <input type="submit" name="send" id="send" value="送出">
    </form>
@endsection
