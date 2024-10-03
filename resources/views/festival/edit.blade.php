@extends('layouts.frontend')
@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('festival.update', $festival->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $festival->name }}" class="form-control"/>
        @error('name') <span class="text-danger"></span>{{$message}} @enderror
    </div>
    <div class="mb-3">
        <label>Date</label>
        <input type="date" name="date" value="{{ $festival->date }}" class="form-control"/>
        @error('date') <span class="text-danger"></span>{{$message}} @enderror
    </div>
    <div class="mb-3">
        <label>Time</label>
        <input type="time" name="time" value="{{ $festival->time }}" class="form-control"/>
        @error('time') <span class="text-danger"></span>{{$message}} @enderror
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" min="1" step="any" name="price" value="{{ $festival->price }}" class="form-control"/>
        @error('price') <span class="text-danger"></span>{{$message}} @enderror
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" rows="3" class="form-control" style="resize: none;">{!! $festival->description !!}</textarea>
        @error('description') <span class="text-danger"></span>{{$message}} @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
</body>
</html>
@endsection
