@extends('admin/index')
@section('content')
<main class="app-content">
  <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
      </ul>
      <div id="clock"></div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="tile">
              <div class="tile-body">
                  <div class="row element-button">
                      <div class="col-sm-2">

                          <a class="btn btn-add btn-sm" href="{{ route('formadd') }}" title="Thêm"><i class="fas fa-plus"></i>
                              Tạo mới danh mục</a>
                      </div>

                  
                  </div>
                  <table class="table table-hover table-bordered" >
                      <thead>
                          <tr>
                              <th width="10"><input type="checkbox" id="all"></th>
                              <th>STT</th>
                              <th>Tên danh mục</th>
                              <th>Hình ảnh danh mục</th>
                              <th>Chức năng</th>

                          </tr>

                      </thead>
                      <tbody>
                        @foreach ($list as $key => $item)
                        <tr>
                          <th width="10"><input type="checkbox" id="all"></th>
                          <td>{{$key+1}}</td>
                          <td>{{$item->ten}}</td>
                          <td><img src="../../../../storage/app/public/upload_img/a.jpg" style="width: 50px;" alt=""></td>
                          <td colspan="2">
                            <a href="{{ route('formedit', ['id'=>$item->id]) }}"  class="btn btn-warning">
                                    <i class="fas fa-edit"></i> 
                                </a>
                            <a onclick="return confirm('bạn chắc chắn muốn xóa không')" href="{{ route('delete', ['id'=>$item->id]) }}" class="btn btn-danger">
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
