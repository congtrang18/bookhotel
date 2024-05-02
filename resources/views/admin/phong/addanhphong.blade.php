@extends('admin.index')
@section('content')

@section('title')
    Thêm ảnh phòng
@endsection
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách phòng</li>
            <li class="breadcrumb-item"><a href="#">Thêm ảnh phòng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Thêm ảnh phòng</h3>
                <div class="tile-body">


                    <form action="{{ route('addanhphong') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <label class="control-label">ảnh phòng</label>
                                    <input class="form-control mb-3" name="anh[]"
                                        type="file" multiple>
                                    
                                </div>

                            </div>
                            <div class="mt-3">
                                <button class="btn btn-save" type="submit" name="btnsubmit">Lưu lại</button>
                                <a class="btn btn-cancel" href="{{ route('phong') }}">Hủy bỏ</a>
                            </div>
                        </div>
                        @csrf
                    </form>






                </div>

            </div>
</main>
@endsection
