@extends('dashboard.layouts.main')
@section('title', 'Pulpit')

@section('content')

<div class="dashboard__content">
    <h1>Dzień dobry, <span>{{ Auth::user()->name }}</span></h1>
</div>

@endsection
