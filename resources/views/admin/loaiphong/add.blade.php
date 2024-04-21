@extends("admin.index")
@section('content')

{{-- @dd($edit) --}}
{{-- <h1>{{$edit}}</h1> --}}
<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm danh mục</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm danh mục</h3>
          <div class="tile-body">
            
           
            <form action="{{ route('adddm') }}" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-3">
                  <label class="control-label">Tên danh mục</label>
                  <input class="form-control mb-3" value="" name="namedm" type="text">
                  <label class="control-label">Ảnh</label>
                  <input class="form-control mb-3"  name="avatar" type="file">
                  <div class="mt-3">
                    <button class="btn btn-save" type="submit" name="btnsubmit">Lưu lại</button>
                  <a class="btn btn-cancel" href="{{ route('listloaiphong') }}">Hủy bỏ</a>
                  </div>
                </div>
                @csrf
              </form>
  
  
  
  
  
  
          </div>
  
        </div>
  </main>
@endsection