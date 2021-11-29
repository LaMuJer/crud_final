@extends("master")

@section("title")
    Home
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="col-12 col-lg-6">
                    <div class="my-5 ">
                        <form action="{{ route('category.update',$category->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="" class="form-label">Category Name</label>
                                <input type="text" class="form-control w-50" name="name" value="{{ $category->name }}">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    @include('category.list')
                </div>
            </div>
        </div>
    </div>
@endsection
