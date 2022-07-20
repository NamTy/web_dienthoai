@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Product','key'=>'Add','url'=>route('products.product')])
<div class="container-fluid py-4">

    <div class="card">
        <form class="p-4" action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên menu:</label>
                <input type="text" name="menus_name" class="form-control border border-dark p-2" id="" placeholder="Nhập tên menu">
            </div>
            <div class="form-group">
                <label for="">Chọn Menu cha</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn Menu cha</option>
                    {{-- {!!$optionSelect!!} --}}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
