@extends('layouts.app')

@section('page-title', 'Comic')

@section('content')

    <div class="container py-5">
        <div class="d-flex align-items-center ">
            <div class="col-6 text-center p-4">
                <img class="img-fluid " src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-6 text-center px-3 ">
                <div>
                    <strong>Title:</strong> {{ $comic->title }} <br>
                    <strong>Description:</strong> {{ $comic->description }} <br>
                    <strong>Price:</strong> {{ $comic->price }} <br>
                    <strong>Series:</strong> {{ $comic->series }} <br>
                    <strong>Sale Date:</strong> {{ $comic->sale_date }} <br>
                    <strong>Type:</strong> {{ $comic->type }} <br>
                </div>
                <div class="actions text-center py-3">
                    <a class="btn btn-primary " href="{{ route('comics.index', $comic) }}"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i> Show all Comics</a>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}"><i class="fa fa-pencil"></i></a>
                </div>
            </div>


        </div>
    </div>

@endsection
