@extends('master')

@section('content')
    <div class="bg_index">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    @foreach(\App\Models\Article::all() as $article)
                    <div class="card mb-5 shadow">
                        <div class="card-body">
                            <h1>
                                <a href="{{ route('article.show',$article->id) }}" class="card-title">{{ Str::words($article->title,10) }}</a>
                            </h1>
                            <span class="badgeCat">{{ $article->category->name }}</span>
                            <p class="card-text">{{ Str::words($article->des,20) }}</p>
                            <div class="controls_index">
                                <form action="{{ route('article.destroy',$article->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button class=" btn">
                                        <i class="fas fa-trash "></i>
                                    </button>
                                </form>
                                <a href="{{ route('article.edit',$article->id) }}" class="btn " ><i class="fas fa-edit "></i></a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
