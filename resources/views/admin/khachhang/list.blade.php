@extends('admin/index')
@section('title')
    Danh sách khách hàng
@endsection
@section('content')
<main class="app-content">
  <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
      </ul>
      <div id="clock"></div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="tile">
              <div class="tile-body">
                  <div class="row element-button">
                      {{-- <div class="col-sm-2">

                          <a class="btn btn-add btn-sm" href="{{ route('formaddphong') }}" title="Thêm"><i class="fas fa-plus"></i>
                              Tạo mới Phòng</a>
                      </div> --}}

                  
                  </div>
                  <table class="table table-hover table-bordered" >
                      <thead>
                          <tr>
                              <th width="10"><input type="checkbox" id="all"></th>
                              <th>STT</th>
                              <th>Tên </th>
                              <th>avatar</th>
                              <th>số điện thoại</th>
                              <th>email</th>
                              <th>Địa chỉ</th>
                              <th>Role</th>
                              <th>Chức năng</th>
                          </tr>

                      </thead>
                      <tbody>
                        @foreach ($listkhachhang as $key => $item)
                        <tr>
                          <th width="10"><input type="checkbox" id="all"></th>
                          <td>{{$key+1}}</td>
                          <td>{{$item->ten}}</td>
                          <td>{{$item->avatar}}</td>
                          <td>{{$item->sdt}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->dia_chi}}</td>
                          <td>{{$item->role}}</td>
                       

                         
                          <td colspan="2">
                            <a href="{{ route('formeditkhachhang', ['id'=>$item->id]) }}"  class="btn btn-warning">
                                    <i class="fas fa-edit"></i> 
                                </a>
                            <a onclick="return confirm('bạn chắc chắn muốn xóa không')" href="{{ route('deletephong', ['id'=>$item->id]) }}" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i></a>
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
