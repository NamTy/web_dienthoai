@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Menus','key'=>'Add','url'=>route('menu.category')])
<div class="container-fluid py-4">

    <div class="card">
        <form class="p-4" action="{{route('menus.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Tên menu:</label>
                <input type="text" name="category_name" class="form-control border border-dark p-2" id="" placeholder="Nhập tên menu">
            </div>
            <div class="form-group">
                <label for="">Chọn danh mục cha</label>
                <select  name='parent_id' class="form-control border border-dark p-2" id="">
                    <option value="0">Chọn danh mục cha</option>
                    {{-- {!!$htmlOptions!!} --}}
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>

</div>
@endsection
