@extends('layouts.app')

@section('page-title', 'Add new Comic')

@section('content')
    <div class="container py-5 ">
        <form action="{{ route('comics.update', $comic) }}" method="post">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Batman & Robin" value="{{ $comic->title }}" />
                <small id="titlehelpId" class="form-text text-muted">Title Comic</small>
            </div>

            <div class="d-flex">
                <img width="100" src="{{ $comic->thumb }}" alt="">
                <div class="mb-3 w-100 px-5">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                        placeholder="//https:" value="{{ $comic->thumb }}" />
                    <small id="thumbhelpId" class="form-text text-muted">thumb Comic</small>
                </div>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="$4.99" value="{{ $comic->price }}" />
                <small id="pricehelpId" class="form-text text-muted">price Comic</small>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="Batman Begin" value="{{ $comic->series }}" />
                <small id="serieshelpId" class="form-text text-muted">series Comic</small>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                    value="{{ $comic->sale_date }}" />
                <small id="sale_datehelpId" class="form-text text-muted">Sale date Comic</small>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="Dark" value="{{ $comic->type }}" />
                <small id="typehelpId" class="form-text text-muted">type Comic</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <label for="description" class="form-label"></label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $comic->description }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>

    </div>


@endsection
