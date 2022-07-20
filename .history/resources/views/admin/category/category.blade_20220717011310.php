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
                        <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                        <th class="text-secondary opacity-7"></th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <!-- <div>
                                    <img src="#" class="avatar avatar-sm me-3">
                                    <p>

                                    </p>
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-xs">John Michael</h6>
                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </div> -->
                                <p>
                                    1
                                </p>
                            </div>
                        </td>
                        <td>
                            <!-- <p class="text-xs font-weight-bold mb-0">Manager</p>
                            <p class="text-xs text-secondary mb-0">Organization</p> -->
                            <p>
                                Apple
                            </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <a href="" class="btn btn-info">Sửa</a>
                            <a href="" class="btn btn-primary">Xóa</a>
                            <!-- <span class="badge badge-sm badge-success">Online</span> -->
                        </td>
                        <!-- <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-normal">23/04/18</span>
                        </td>
                        <td class="align-middle">
                            <a href="javascript:;" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                            </a>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
