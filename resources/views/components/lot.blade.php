@extends('layouts.main')
@section('content')
    <a href="{{ route('main.index') }}">Previous page</a>
    <div class="lot col-12">
        <img src="" class="card-img-top" alt="">
        <div class="lot-body card-body" style="text-align: center">
            <h1 class="card-title"><span style="color: #1b7268; font-style: italic">Lot name:</span><br> {{ $lot->name }}</h1>
            <p class="card-text"><span style="color: #1b7268; font-style: italic">Lot description:</span><br> {{ $lot->description }}</p>
        </div>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="max-width: 150px; margin: 20px auto">
            <a type="button" href="{{ route('lot.editLot', $lot->id) }}" class="btn btn-warning">Edit</a>
            <a type="button" href="{{ route('lot.getLotById', $lot->id) }}" class="btn btn-danger">Remove</a>
        </div>
    </div>
@endsection
