<table class="table text-center table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Controls</th>
        <th>Created_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Category::all() as $category)
        <tr class="">
            <td class="">{{ $category->id }}</td>
            <td class="">{{ $category->name }}</td>
            <td class="controls">
                <a href="{{ route('category.edit',$category->id) }}" class="btn editBtn"><i class="fas fa-edit"></i></a>
                <form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn delBtn"><i class="fas fa-trash"></i></button>
                </form>
            </td>
            <td class="">{{ $category->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
