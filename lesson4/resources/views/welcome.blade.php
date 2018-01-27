@extends('layouts.client')
@section('title', 'trang chu')
@section('content')
<h2>{{$name}} - {{$age}}</h2>
	
<input type="checkbox" 
@if($age < 50) checked @else null @endif> Trẻ

<script type="text/javascript" src="{{ asset('plugins/bootstrap/js/main.js') }}"></script>

@endsection