@extends('layouts.main')
@section('content')
<h1 class="title">Who to follow</h1>

@foreach($users as $user)
@include('widgets._followee')
@endforeach
@endsection
