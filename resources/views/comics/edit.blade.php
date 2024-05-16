@extends('layouts.app')

@section('page-title', 'Add new Comic')

@section('content')
    <div class="container py-5 ">
        @include('partials.validation-errors')
        <form action="{{ route('comics.update', $comic) }}" method="post">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="helpId" placeholder="Batman & Robin" value="{{ old('title', $comic->title) }}" required/>
                <small id="titlehelpId" class="form-text text-muted">Title Comic</small>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex">
                <img width="100" src="{{ $comic->thumb }}" alt="">
                <div class="mb-3 w-100 px-5">
                    <label for="thumb" class="form-label">thumb</label>
                    <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="thumb"
                        id="thumb" aria-describedby="helpId" placeholder="//https:"
                        value="{{ old('thumb', $comic->thumb) }}" />
                    <small id="thumbhelpId" class="form-text text-muted">thumb Comic</small>
                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpId" placeholder="$4.99"
                    value="{{ old('price', $comic->price) }}" />
                <small id="pricehelpId" class="form-text text-muted">price Comic</small>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpId" placeholder="Batman Begin"
                    value="{{ old('series', $comic->series) }}" />
                <small id="serieshelpId" class="form-text text-muted">series Comic</small>
                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">sale date</label>
                <input type="date" class="form-control  @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpId" value="{{ old('sale_date', $comic->sale_date) }}" />
                <small id="sale_datehelpId" class="form-text text-muted">Sale date Comic</small>
                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control  @error('type') is-invalid @enderror" name="type"
                    id="type" aria-describedby="helpId" placeholder="Dark" value="{{ old('type', $comic->type) }}" />
                <small id="typehelpId" class="form-text text-muted">type Comic</small>
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <label for="description" class="form-label"></label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="5">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>

    </div>


@endsection
