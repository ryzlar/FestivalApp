@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="festivals">
                    <div class="festival-body">
                        <form action="{{ route('festival.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name') <span class="text-danger"></span>{{$message}} @enderror
                            </div>
                            <div class="mb-3">
                                <label>Date</label>
                                <input type="date" name="date" class="form-control" />
                                @error('date') <span class="text-danger"></span>{{$message}} @enderror
                            </div>
                            <div class="mb-3">
                                <label>Time</label>
                                <input type="time" name="time" class="form-control" />
                                @error('time') <span class="text-danger"></span>{{$message}} @enderror
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="number" min="1" step="any" name="price" class="form-control" />
                                @error('price') <span class="text-danger"></span>{{$message}} @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" rows="3" class="form-control" style="resize: none;"></textarea>
                                @error('description') <span class="text-danger"></span>{{$message}} @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
