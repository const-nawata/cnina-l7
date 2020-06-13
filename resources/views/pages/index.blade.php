@extends('layouts.base')

@section('title', $title)

@section('header')
	<h2>Index from layout</h2>
@endsection

@section('body')
<div>Body -- Method: {{ $method_name }}</div>
<div>{{ __('messages.welcome') }}</div>
@endsection

@section('footer')
	<div>Footer</div>
@endsection
