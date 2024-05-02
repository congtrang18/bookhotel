@extends('admin/index')
@section('title')
    Danh sách phòng
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Danh sách Phòng</b></a></li>

            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-8">

                                <a class="btn btn-add btn-sm" href="{{ route('formaddphong') }}" title="Thêm"><i
                                        class="fas fa-plus"></i>
                                    Tạo mới Phòng</a>
                            </div>

                        </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>

                                    <th>Tên </th>
                                    <th>Img </th>

                                    <th>Giá</th>
                                    <th>diện tích</th>
                                    <th>hướng nhìn</th>
                                    <th>giường</th>
                                    <th>số lượng người</th>
                                    <th>mô tả</th>
                                    <th>loại phòng</th>
                                    <th>Chức năng</th>

                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($listphong as $key => $item)
                                    <tr>

                                        <td>{{ $item->ten }}</td>
                                        <td><img src="../upload_img/{{ $item->imgroom }}" style="width: 70%;height: 70%;"
                                                alt=""></td>

                                        <td>{{ $item->gia }}</td>
                                        <td>{{ $item->dien_tich }}</td>
                                        <td>{{ $item->huong_nhin }}</td>
                                        <td>{{ $item->giuong }}</td>
                                        <td>{{ $item->sl_nguoi }}</td>
                                        <td>{{ $item->mo_ta }}</td>
                                        <td>{{ $item->tenloaiphong }}</td>
                                        <td colspan="2">
                                           <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <a href="{{ route('formeditphong', ['id' => $item->id]) }}"
                                                    class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <a onclick="return confirm('bạn chắc chắn muốn xóa không')"
                                                href="{{ route('deletephong', ['id' => $item->id]) }}"
                                                class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="col-md-12 mt-5">
                                                <a class="btn btn-add btn-sm" href="{{ route('formaddanhphong',['id'=>$item->id]) }}"
                                                title="Thêm"><i class="fas fa-plus"></i>
                                                Thêm ảnh Phòng</a>
                                            </div>
                                           </div>
                                            

                                        </td>

                                    </tr>
                                @endforeach

                                {{-- <i class="fas fa-edit"></i> --}}
                                {{-- <i class="fas fa-trash-alt"></i> --}}
                            </tbody>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
