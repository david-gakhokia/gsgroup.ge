@extends('backend.layouts.app')

@section('title', __('dashboard.Client View'))

@section('content')

<h1>Show</h1>
{{ $client->name }}

@endsection
