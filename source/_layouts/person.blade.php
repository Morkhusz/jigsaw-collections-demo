@extends('_layouts.master')

@section('body')
<header>
    <h2>Person</h2>
    <h3>{{ $page->name }}</h3>
</header>

@yield('content')

@include('_layouts.blade-markdown-test')

@endsection
