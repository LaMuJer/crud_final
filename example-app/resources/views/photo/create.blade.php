@extends('master')

@section('title') Photo Upload @stop
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data" class="my-5">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <button class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
    </div>
@stop
