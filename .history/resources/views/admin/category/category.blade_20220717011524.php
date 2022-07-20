@extends('admin.layout.index')
@section('title','Admin')
@section('content')
@include('admin.layout.nav_content',['name'=>'Category', 'key'=>'List','url'=>route('admin')])

<div class="container-fluid py-4">
    <div class=row>
        <div class="col-6"></div>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <a href="{{route('category.create')}}" class="btn btn-success">ADD</a>
        </div>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên danh mục</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category) )

                    @endforeach
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <p>
                                    1
                                </p>
                            </div>
                        </td>
                        <td>

                            <p>
                                Apple
                            </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a href="" class="btn btn-info">Sửa</a>
                            <a href="" class="btn btn-primary">Xóa</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
