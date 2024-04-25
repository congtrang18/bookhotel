@extends('admin.index')
@section('content')

@section('title')
    Sửa phòng
@endsection
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách khách hàng</li>
            <li class="breadcrumb-item"><a href="#">Sửa khách hàng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">sửa khách hàng</h3>
                <div class="tile-body">


                    <form action="{{ route('updatekhachhang', ['id' => $editkhachhang[0]->id]) }}" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="control-label">Tên </label>
                                    <input class="form-control mb-3" value="{{ $editkhachhang[0]->ten }}" disabled
                                        type="text">

                                </div>

                                <div class="col-md-3">
                                    <label class="control-label">avatar</label>
                                    <input class="form-control mb-3" value="{{ $editkhachhang[0]->avatar }}" disabled
                                        type="text">

                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Số điện thoại</label>
                                    <input class="form-control mb-3" disabled value="{{ $editkhachhang[0]->sdt }}"
                                        type="text">

                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">email</label>
                                    <input class="form-control mb-3" disabled value="{{ $editkhachhang[0]->email }}"
                                        type="text">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="control-label">địa chỉ</label>
                                    <input class="form-control mb-3" disabled value="{{ $editkhachhang[0]->dia_chi }}"
                                        type="text">

                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">role</label>
                                    <select name="role" id="" class=" form-control form-select">

                                        @if ($editkhachhang[0]->role == 0)
                                            <option value="0">User</option>

                                            <option value="1">Admin</option>
                                        @else
                                            <option value="1">Admin</option>

                                            <option value="0">User</option>
                                        @endif


                                    </select>

                                </div>


                            </div>

                            <div class="mt-3">
                                <button class="btn btn-save" type="submit" name="btnsubmit">Lưu lại</button>
                                <a class="btn btn-cancel" href="{{ route('khachhang') }}">Hủy bỏ</a>
                            </div>
                        </div>
                        @csrf
                    </form>






                </div>

            </div>
</main>
@endsection
