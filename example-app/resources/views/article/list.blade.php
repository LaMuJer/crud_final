@extends('master')

@section('content')
    <div class="bg_index">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                        <div class="card mb-5 shadow">
                            <div class="card-body">
                                <h1><a href="{{ route('article.show',$article->id) }}" class="card-title">{{ $article->title }}</a></h1>
                                <span >{{ $article->category_id }}</span>
                                <p class="card-text">{{ $article->des }}</p>
                            </div>

                        </div>
                    <a href="{{ route('article.index') }}" class="btn createBtn">See All</a>
                </div>
            </div>
        </div>
    </div>
@endsection
