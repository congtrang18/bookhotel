@extends('admin.index')
@section('content')

@section('title')
    Sửa phòng
@endsection
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách phòng</li>
            <li class="breadcrumb-item"><a href="#">Sửa phòng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">sửa phòng</h3>
                <div class="tile-body">


                    <form action="{{ route('updatephong', ['id'=> $editphong[0]->id] ) }}" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="control-label">Tên phòng</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->ten }}" name="ten"
                                        type="text">
                                    @error('ten')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label class="control-label">Giá phòng</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->gia }}" name="gia"
                                        type="text">
                                    @error('gia')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Diện tích phòng</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->dien_tich }}"
                                        name="dien_tich" type="text">
                                    @error('dien_tich')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Hướng nhìn phòng</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->huong_nhin }}"
                                        name="huong_nhin" type="text">
                                    @error('huong_nhin')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="control-label">Giường</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->giuong }}" name="giuong"
                                        type="text">
                                    @error('giuong')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">số lượng người</label>
                                    <input class="form-control mb-3" value="{{ $editphong[0]->sl_nguoi }}"
                                        name="sl_nguoi" type="text">
                                    @error('sl_nguoi')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">mô tả</label>
                                    <textarea class="form-control" name="mo_ta" id="" cols="30" rows="10">
                                        {{ $editphong[0]->mo_ta }}
                                    </textarea>
                                    @error('mo_ta')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Loại phòng</label>
                                    <select name="id_loai_phong" id="" class="form-select form-control">
                                        <option value="{{ $editphong[0]->id_loai_phong }}">{{ $editphong[0]->tenloaiphong }}</option>
                                        @foreach ($loaiphong as $lp)
                                            @if ($lp->id != $editphong[0]->id_loai_phong)
                                                <option value="{{ $lp->id }}">{{ $lp->ten }}</option>
                                            @endif
                                        @endforeach
                                    </select>
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
