@extends('layouts.main')
@section('categories')
    @php($i = 1)
    @foreach($categories as $category)
        <li><a class="dropdown-item" href="/category/{{ $i++ }}">{{ $category->name }}</a></li>
    @endforeach
@endsection
