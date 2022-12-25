@extends('layouts.main')
@section('content')
    @foreach($lots as $lot)
        <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $lot->name }}</h5>
                <p class="card-text">{{ $lot->description }}</p>
                <a href="/lot/{{ $lot->id }}" class="btn btn-primary">View lot</a>
            </div>
        </div>
    @endforeach
@endsection
