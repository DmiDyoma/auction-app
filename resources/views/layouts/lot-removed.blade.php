@extends('layouts.main')
@section('content')
    <a href="{{ route('main.index') }}">Main page</a>
    <div class="alert alert-success" role="alert">
        Lot {{ $lot_id }} is removed!
    </div>
@endsection
