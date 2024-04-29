@extends('admin/index')
@section('title')
    Danh sách đánh giá
@endsection
@section('content')
<main class="app-content">
  <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách đánh giá</b></a></li>
      </ul>
      <div id="clock"></div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="tile">
              <div class="tile-body">
                  {{-- <div class="row element-button">
                      <div class="col-sm-2">

                          <a class="btn btn-add btn-sm" href="{{ route('formaddphong') }}" title="Thêm"><i class="fas fa-plus"></i>
                              Tạo mới Phòng</a>
                      </div>

                  
                  </div> --}}
                  <table class="table table-hover table-bordered" >
                      <thead>
                          <tr>
                              <th width="10"><input type="checkbox" id="all"></th>
                              <th>STT</th>
                              <th>Tên </th>
                              <th>sao </th>
                              <th>tiêu đề</th>
                              <th>Ghi chú</th>
                              <th>id khách hàng</th>
                              
                              <th>Chức năng</th>

                          </tr>

                      </thead>
                      <tbody>
                        @foreach ($listdanhgia as $key => $item)
                        <tr>
                          <th width="10"><input type="checkbox" id="all"></th>
                          <td>{{$key+1}}</td>
                          <td>{{$item->ten}}</td>
                          <td>{{$item->sao}}</td>
                          <td>{{$item->tieu_de}}</td>
                          <td>{{$item->ghi_chu}}</td>
                          <td>{{$item->id_khach_hang}}</td>
                          
                          <td colspan="2">
                            
                            <a onclick="return confirm('bạn chắc chắn muốn xóa không')" href="{{ route('deletedanhgia', ['id'=>$item->id]) }}" class="btn btn-danger">
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
