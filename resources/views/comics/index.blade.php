@extends('layouts.app')

@section('page-title', 'Comics Index')

@section('content')
    <div class="container py-5">
        <div class="text-end pb-3">
            <a href="{{route('comics.create')}}" class="btn btn-primary">Add new Comic</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img width="50" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye"></i></a>
                                /edit/delete</td>
                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row">Nothing Found</td>
                        </tr>
                    @endforelse


                </tbody>

            </table>
            {{ $comics->links('pagination::bootstrap-5') }}
        </div>


    </div>
@endsection
