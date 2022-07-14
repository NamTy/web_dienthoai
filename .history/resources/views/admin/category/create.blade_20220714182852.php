@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Category','key'=>'Add'])
<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{route('category.create')}}" class="btn btn-success">ADD</a>
        </div>
    </div>
    <div class="card">
        <form class="p-4" action="{{route('category.store')}}" methods="post">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="category_name" class="form-control border border-dark p-2" id="" placeholder="Nhâp Tên danh mục">
            </div>
            <div class="form-group">
                <label for="">Chọn danh mục cha</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn danh mục cha</option>
                    {!!$htmlOptions!!}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
