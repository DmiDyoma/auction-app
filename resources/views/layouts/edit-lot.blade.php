@extends('layouts.main')
@section('content')
    <a href="{{ route('main.index') }}">Previous page</a>
    <form action="{{ route('layouts.lot-saved', $lot->id) }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
            <input type="text" name="lot_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{ $lot->name }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
            <input type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="{{ $lot->description }}">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
