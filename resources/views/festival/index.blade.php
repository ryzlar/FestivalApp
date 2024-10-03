@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="festivals">
                    <div class="festivals-header">
                        <h4>Festival List
                            <a href=" {{ url('festival/create') }}" class="btn btn-primary float-end">Add Festival</a>
                        </h4>
                    </div>
                    <div class="festival-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($festivals as $festival)
                                <tr>
                                    <td>
                                        <a href="{{ route('festival.show', $festival->id) }}">{{$festival->name}}</a>
                                    </td>
                                    <td>{{$festival->date}}</td>
                                    <td>{{$festival->price}}</td>
                                    <td>
                                        <div class="buttons">
                                            <a href="{{ route('festival.edit', $festival->id) }}" class="btn_edit">Edit</a>
                                            <form action="{{ route('festival.destroy', $festival->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn_delete">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
