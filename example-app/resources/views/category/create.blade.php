@extends("master")

@section("title")
    Home
@endsection

@section("content")
<div class="body_bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-8  my-lg-5">

                <div class="box">
                    <div class="col-12 col-lg-12">
                        <div class="my-3 ">
                            <form action="{{ route('category.store') }} " class="catForm" method="post">
                                @csrf
                                <h1>Category Create</h1>
                                <div class="catFormdata my-4">
                                    <div class="mb-3">
                                        <input type="text" class="form-control catFormdata_input" name="name" >
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn createBtn">Create</button>
                                    </div>
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
    </div>
</div>

@endsection
