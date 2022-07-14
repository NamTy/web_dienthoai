@extends('admin.layout.index')
@section('title','Admin')
@section('content')
<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{route('category.create')}}" class="btn btn-success">ADD</a>
        </div>
    </div>
    <div class="card">
        <form class="p-4">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control border border-dark p-2" id="" placeholder="Nhâp Tên danh mục">
            </div>
            <div class="form-group">
                <label for="">Chọn danh mục cha</label>
                <select class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn danh mục cha</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
