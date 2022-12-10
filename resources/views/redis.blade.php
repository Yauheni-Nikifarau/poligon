@extends('layouts.app')
@section('content')
    <h1>Redis Manager</h1>
    @include('redis.tabs_with_forms')
    @include('redis.table')
@endsection
