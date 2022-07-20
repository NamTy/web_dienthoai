@extends('admin.layout.index')
@section('title', 'Admin')
@section('content')
    @include('admin.layout.nav_content', [
        'name' => 'Product',
        'key' => 'Add',
        'url' => route('products.product'),
    ])
    <div class="container-fluid py-4">

        <div class="card">
            <form class="p-4" action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Tên sản phẩm:</label>
                    <input type="text" name="menus_name" class="form-control border border-dark p-2" id=""
                        placeholder="Nhập tên ản phẩm">
                </div>
                <div class="form-group">
                    <label for="">Chọn danh mục</label>
                    <select name='parent_id' class="form-control border border-dark p-2" id="">
                        <option value="0">Chọn danh mục</option>
                        {!! $htmloptions !!}
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea id="summernote" name="editordata"></textarea>
                    <script type="text/javascript">
                        $('#summernote').summernote({
                            placeholder: 'Mô tả sản phẩm',
                            tabsize: 2,
                            height: 250,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ]
                        });
                    </script>
                    <style>
                        #summernote .btn.btn-sm i,
                        .btn-group-sm>.btn i{
                            font-size: 1rem;
                        }
                    </style>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>

    </div>
@endsection
