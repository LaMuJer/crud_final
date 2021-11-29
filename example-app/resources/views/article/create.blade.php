@extends("master")

@section("title")
    Home
@endsection

@section("content")
    <div class="body_bg_create_article">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-8  my-lg-5">

                    <div class="box">
                        <div class="col-12 col-lg-12">
                            <div class="my-3 ">
{{--                                @if ($errors->any())--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        <ul>--}}
{{--                                            @foreach ($errors->all() as $error)--}}
{{--                                                <li>{{ $error }}</li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                <form action="{{ route('article.store') }} " class="catForm" method="post">
                                    @csrf
                                    <h1 class="artT">Article Create</h1>
                                    <div class=" my-4">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control w-50 catFormdata_input @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
                                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Select Category</label>
                                            <select name="category_id" id="" class="form-select w-50 catFormdata_input">
                                                @foreach(\App\Models\Category::all() as $c)
                                                    <option value="{{ $c->id }}" {{ $c->id == old('category_id') ? 'selected' : '' }}>{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Description</label>
                                            <textarea name="des" id="" cols="30" rows="7" class="form-control catFormdata_input @error('des') is-invalid @enderror">
                                                {{ old('des') }}
                                            </textarea>
                                            @error('des') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn createBtn">Create</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
