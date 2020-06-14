@extends('layouts.base')

@section('title', $title)

@section('header')
	<h2>Index from layout</h2>
@endsection

@section('body')
<div>Body -- Method: {{ $method_name }}</div>
<div>{{ __('messages.welcome') }}</div>

<a href="{{ route('userslist') }}">Users list</a>
@endsection

@section('footer')
	<div>Footer</div>
@endsection
