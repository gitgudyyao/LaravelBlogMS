@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    Welcome to the Blog Management System. {{ Auth::user()->name }}, You are {{ Auth::user()->role }}.

   <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">If you are an admin, you have the following functions:</strong>
                        <h5 class="mb-0">
                            <a class="text-dark">Categories CRUD, Blog Post CRUD</a>
                        </h5>
                        <strong class="d-inline-block mb-2 text-primary">If you are an writer, you can only do the following:</strong>
                        <h5 class="mb-0">
                            <a class="text-dark">Blog Post CRUD</a>
                        </h5>
                        <strong class="d-inline-block mb-2 text-primary">If you are an user, you can only do the following:</strong>
                        <h5 class="mb-0">
                            <a class="text-dark">View the blog only</a>
                        </h5>
                </div>
            </div>
@endsection
