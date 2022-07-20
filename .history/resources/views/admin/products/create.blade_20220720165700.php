@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Product','key'=>'Add','url'=>route('products.product')])
<div class="container-fluid py-4">

    <div class="card">
        <form class="p-4" action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên sản phẩm:</label>
                <input type="text" name="menus_name" class="form-control border border-dark p-2" id="" placeholder="Nhập tên ản phẩm">
            </div>
            <div class="form-group">
                <label for="">Chọn danh mục</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn danh mục</option>
                    {!!$htmloptions!!}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
