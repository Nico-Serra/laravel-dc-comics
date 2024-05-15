@extends('layouts.app')

@section('page-title'. 'Home')

@section('content')

<div class="p-5 mb-4 ">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">View our comics</h1>
        <p class="col-md-8 fs-4">
            All Comics of DC 
        </p>
        <a href="{{route('comics.index')}}" class="btn btn-primary">Go To Comics</a>
    </div>
</div>

    
@endsection