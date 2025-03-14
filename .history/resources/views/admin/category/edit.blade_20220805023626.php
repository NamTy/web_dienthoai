@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Category',
        'key' => 'Edit',
        'url' => route('category.category'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="{{ route('category.update', ['id' => $categories->category_id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="category_name" class="form-control border border-dark p-2" id=""
                        value="{{ $categories->category_name }}">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh Danh mục</label>
                    <input type="file" name="image_link" class="p-2" id="">
                </div>
                <div class="col-12">
                    <img
                    src="{{ $categories->image_path }}" alt="{{ $categories->image_name }}" height="100px">
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục cha</label>
                    <select name='parent_id' class="form-control border border-dark p-2" id="">
                        <option value="0">Chọn danh mục cha</option>
                        {!! $htmlOptions !!}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
