@extends('layouts.base')
@section('header')
	<h2>Index from layout</h2>
@endsection

@section('body')
<div>Method: {{ $method_name }}</div>
@endsection

@section('footer')
	<div>Footer</div>
@endsection
